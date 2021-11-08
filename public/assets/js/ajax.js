import {ModalWindows} from "./ModalWindows.js";

let updateProfile = document.getElementById("updateProfile");

if(updateProfile) {
    updateProfile.addEventListener("click", modal);
}

function modal() {
    let windows = new ModalWindows("20rem", "40rem", "body", "Mettre à jour")
    windows.create();
}