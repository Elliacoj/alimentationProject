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
        let data = {
            "Prénom:": response["firstname"], "Nom:": response['lastname'], "Date d'anniversaire:": response['birthday'], "Sex:": response['sex'],
            "Taille (en cm):": response["size"], "Poids (en Kg):": response['weight'], "Tour de cou (en cm):": response['sizeNeck'], "Tour de ventre (en cm):": response['sizeStomach']
        }
        let windows = new ModalWindows("Mettre à jour", data)
        windows.create();

        let backModal = document.getElementById("backModal");
        backModal.addEventListener("click", function () {
            updateProfile.addEventListener("click", modal);
        });
        windows.remove();

    }
}