import {ModalWindows} from "./ModalWindows.js";

class Ajax {
    /**
     * Constructor
     */
    constructor() {
        this.updateProfile = document.getElementById("updateProfile");
        this.check = true;
    }

    /**
     * Init ajax dataUser
     */
    init() {
        if(this.updateProfile) {
            this.updateProfile.addEventListener("click", () => {
                if(this.check === true) {
                    this.modal();
                    this.check = false;
                }
            });
        }
    }

    modal() {
        let update = this.updatePersonalData;

        let xml = new XMLHttpRequest();
        xml.responseType = "json";
        xml.open("SEARCH", "/api/personalData/index.php");
        xml.send();
        xml.onload = () => {
            let response = xml.response;
            let data = [
                {
                    "Prénom:": response["firstname"], "Nom:": response['lastname'], "Date d'anniversaire:": response['birthday'], "Sex:": response['sex'],
                    "Taille (en cm):": response["size"], "Poids (en Kg):": response['weight'], "Tour de cou (en cm):": response['sizeNeck'], "Tour de ventre (en cm):": response['sizeStomach'],
                    "Tour de hanche": response["sizeHaunch"]
                },
                {
                    0: "firstname", 1: "lastname", 2: "birthday", 3: "sex", 4: "size", 5: "weight",
                    6: "sizeNeck", 7: "sizeStomach", 8: "sizeHaunch"
                }
            ];

            let windows = new ModalWindows("Mettre à jour", data)
            windows.create("dataUser");

            let backModal = document.getElementById("backModal");
            backModal.addEventListener("click", () => {
                this.check = true;
            });

            windows.remove();
            windows.update("/api/personalData/index.php");

            let confirmModal = document.getElementById("confirmModal");
            confirmModal.addEventListener("click", () => {
                update();
                this.check = true;
            });
        }
    }

    updatePersonalData() {
        let xml = new XMLHttpRequest();
        xml.responseType = "json";
        xml.open("SEARCH" , "/api/personalData/index.php")
        xml.send();
        xml.onload = function() {
            let response = xml.response;
            document.getElementById("firstnameSpan").innerHTML = response['firstname'];
            document.getElementById("lastnameSpan").innerHTML = response['lastname'];

            response['sex'] === 0 ? document.getElementById("sexSpan").innerHTML = "H" : document.getElementById("sexSpan").innerHTML = "F";
            response['size'] === "" ? document.getElementById("sizeSpan").innerHTML = "" : document.getElementById("sizeSpan").innerHTML = response['size'] +" cm";
            response['weight'] === "" ? document.getElementById("weightSpan").innerHTML = "" : document.getElementById("weightSpan").innerHTML = response['weight'] +" Kg";
            response['sizeNeck'] === "" ? document.getElementById("sizeNeckSpan").innerHTML = "" : document.getElementById("sizeNeckSpan").innerHTML = response['sizeNeck'] + " cm";
            response['sizeStomach'] === "" ? document.getElementById("sizeStomachSpan").innerHTML = "" : document.getElementById("sizeStomachSpan").innerHTML = response['sizeStomach'] + " cm";
            response['sizeHaunch'] === "" ? document.getElementById("sizeHaunchSpan").innerHTML = "" : document.getElementById("sizeHaunchSpan").innerHTML = response['sizeHaunch'] + " cm";

            if(response['birthday'] !== "" && response['birthday'] !== null) {
                let dateB = new Date((response['birthday']));
                let dateA = new Date();
                let interval = (new Date((dateA.getTime() - (dateB.getTime())))).getTime()/1000/60/60/24/365;

                document.getElementById("birthdaySpan").innerHTML = Math.floor(interval).toString() + " ans" ;
            }
        }
    }
}

export {Ajax};