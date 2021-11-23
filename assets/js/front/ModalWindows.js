export {ModalWindows};

class ModalWindows {
    constructor(title, data = []) {
        this.data = data;
        this.title = title;

        this.container = document.createElement("div");
        this.buttonConfirm = document.createElement("button");
        this.buttonBack = document.createElement("button")
    }

    create(type) {
        if(this.container) {
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

            switch (type) {
                case "dataUser":
                    this.dataUser();
                    break;
            }

            this.buttonConfirm.innerHTML = "Envoyer";
            this.buttonBack.innerHTML = "Annuler";

            this.container.appendChild(this.buttonConfirm);
            this.container.appendChild(this.buttonBack);
            document.body.appendChild(this.container);
        }
    }

    dataUser() {
        for (let name in this.data[0]) {
            let div = document.createElement("div");
            let label = document.createElement("label");

            label.style.cssText = "width: 100%; display: block; text-align: center;";
            label.innerHTML = name;
            div.className = "divModal";
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

                if(this.data[0][name] !== "") {
                    select.selectedIndex = (this.data[0][name] + 1);
                }
            }
            else {

                let input = document.createElement("input");

                if(!name.indexOf("Date")) {
                    input.type = "date";
                }


                input.style.cssText = "width: 60%; display: block; margin: 1rem auto; padding: 1rem; font-size: 2rem;";


                input.value = this.data[0][name];


                div.appendChild(input);
            }

            div.style.cssText = "width: 100%; padding: 2rem";

            this.container.appendChild(div);
        }
    }

    remove() {
        if(this.container) {
            let container = this.container;
            this.buttonBack.addEventListener("click", function() {
                container.remove();
            });
        }
    }

    update(file) {
        if(this.container) {
            let container = this.container;
            let dataModal = this.data[1];
            this.buttonConfirm.addEventListener("click", function () {
                let xml = new XMLHttpRequest();
                xml.responseType = "json";
                xml.open("PUT", file);

                let divData = document.querySelectorAll(".divModal");
                let data = {};
                for(let x = 0; x < divData.length; x++) {
                    data[dataModal[x]] = divData[x].lastChild.value;
                }
                xml.send(JSON.stringify(data));
                container.remove();
            })
        }
    }
}
