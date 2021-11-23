import {ModalWindows} from "./ModalWindows";

class Kcal {
    constructor() {
        this.button = document.getElementById("buttonAddKcal");
    }

    init() {
        if(this.button) {
            this.button.addEventListener("click", ()=> {
                let modalWindow = new ModalWindows();
                modalWindow.create();
                modalWindow.remove();
            })
        }
    }
}
export {Kcal};