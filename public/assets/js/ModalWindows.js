export {ModalWindows};
class ModalWindows {
    constructor(title, data = []) {
        this.data = data;
        this.title = title;

        this.container = document.createElement("div");
        this.buttonConfirm = document.createElement("button");
        this.buttonBack = document.createElement("button")
    }

    create() {
        this.buttonConfirm.id = "confirmModal";
        this.buttonBack.id = "backModal";
        let h2 = document.createElement("h2");
        h2.innerHTML = this.title;
        this.container.style.cssText = "" +
            "width: 40%; position: absolute; left: 30%; top: 10vh; background-color: #fbe5c8; box-shadow: 7px 7px 7px darkgray;" +
            "border-radius: 1rem; color: #912b2b;" +
            "";

        h2.style.cssText = "text-align: center; font-size: 3rem; font-style: italic; text-decoration-line: underline; padding: 1.5rem"

        this.container.appendChild(h2);

        for (let name in this.data) {
            let div = document.createElement("div");
            let label = document.createElement("label");

            label.style.cssText = "width: 100%; display: block; text-align: center;";
            label.innerHTML = name;
            div.appendChild(label);

            if(!name.indexOf("Sex")) {
                let select = document.createElement("select");
                let option = document.createElement("option");
                let optionH = document.createElement("option");
                let optionF = document.createElement("option");

                select.style.cssText = "display: block; margin: 1rem auto; font-size: 2rem; padding: 1rem";
                option.innerHTML = "Choix";
                option.value = "";
                optionF.innerHTML = "Femme";
                optionF.value = "1";
                optionH.innerHTML = "Homme";
                optionH.value = "0";

                select.appendChild(option)
                select.appendChild(optionH);
                select.appendChild(optionF);
                div.appendChild(select);

                if(this.data[name] !== "") {
                    select.selectedIndex = (this.data[name] + 1);
                }
            }
            else {

                let input = document.createElement("input");

                if(!name.indexOf("Date")) {
                    input.type = "date";
                }


                input.style.cssText = "width: 60%; display: block; margin: 1rem auto; padding: 1rem; font-size: 2rem;";


                input.value = this.data[name];


                div.appendChild(input);
            }

            div.style.cssText = "width: 100%; padding: 2rem";

            this.container.appendChild(div);
        }
        this.buttonConfirm.innerHTML = "Envoyer";
        this.buttonBack.innerHTML = "Annuler";

        this.container.appendChild(this.buttonConfirm);
        this.container.appendChild(this.buttonBack);
        document.body.appendChild(this.container);
    }

    remove() {
        let container = this.container;
        this.buttonBack.addEventListener("click", function() {
            container.remove();
        });
    }

    update() {
        let xml = new XMLHttpRequest()
    }
}
