import {ModalWindows} from "./ModalWindows.js";

let updateProfile = document.getElementById("updateProfile");

if(updateProfile) {
    updateProfile.addEventListener("click", modal);
}

/**
 * Create a modal windows for update a personal data
 */
function modal() {
    updateProfile.removeEventListener("click", modal);
    let xml = new XMLHttpRequest();
    xml.responseType = "json";
    xml.open("SEARCH", "/api/personalData/crud.php");
    xml.send();
    xml.onload = function () {
        let response = xml.response;
        let data = [
            {
                "Prénom:": response["firstname"], "Nom:": response['lastname'], "Date d'anniversaire:": response['birthday'], "Sex:": response['sex'],
                "Taille (en cm):": response["size"], "Poids (en Kg):": response['weight'], "Tour de cou (en cm):": response['sizeNeck'], "Tour de ventre (en cm):": response['sizeStomach']
            },
            {
                0: "firstname", 1: "lastname", 2: "birthday", 3: "sex", 4: "size", 5: "weight",
                6: "sizeNeck", 7: "sizeStomach"
            }
            ]
        let windows = new ModalWindows("Mettre à jour", data)
        windows.create();

        let backModal = document.getElementById("backModal");
        backModal.addEventListener("click", function () {
            updateProfile.addEventListener("click", modal);
        });

        windows.remove();
        windows.update("/api/personalData/crud.php");

        let confirmModal = document.getElementById("confirmModal");
        confirmModal.addEventListener("click", function() {
            updatePersonalData();
            updateProfile.addEventListener("click", modal);
        });
    }
}

function updatePersonalData() {
    let xml = new XMLHttpRequest();
    xml.responseType = "json";
    xml.open("SEARCH" , "/api/personalData/crud.php")
    xml.send();
    xml.onload = function() {
        let response = xml.response;
        document.getElementById("firstnameSpan").innerHTML = response['firstname'];
        document.getElementById("lastnameSpan").innerHTML = response['lastname'];

        document.getElementById("sizeSpan").innerHTML = response['size'];
        document.getElementById("weightSpan").innerHTML = response['weight'];
        document.getElementById("sizeNeckSpan").innerHTML = response['sizeNeck'];
        document.getElementById("sizeStomachSpan").innerHTML = response['sizeStomach'];


        let sex = document.getElementById("sexSpan");
        response['sex'] = 0 ? sex.innerHTML = "H" : sex.innerHTML = "F";

        if(response['birthday'] !== "") {
            let dateB = new Date(response['birthday']);
            let dateA = new Date();
            let interval = dateB.getDate() - dateA.getDate();
            console.log(dateA.getTime());
            console.log(dateB.getTime());

            /*document.getElementById("birthdaySpan").innerHTML = date;*/
        }
    }
}