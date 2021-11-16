class CreateLogin {
    constructor() {
        this.buttonCreate = document.getElementById("buttonCreate");
        this.passwordInput = document.getElementById("createPassword");
        this.passwordCheckInput = document.getElementById("createCheckPassword");
    }

    /**
     * Check if password is correct
     */
    check() {
        const $regex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)(?=.*[@$!%*?&])[A-Za-z\\d@$!%*?&]{8,}$");
        this.buttonCreate.removeEventListener("mouseover", this.opacityButton);
        this.buttonCreate.removeEventListener("mouseout", this.opacityButton);

        if((!$regex.test(this.passwordInput.value) === false) && (this.passwordInput.value === this.passwordCheckInput.value)) {
            this.buttonCreate.removeAttribute("disabled");
            this.passwordInput.style.borderColor = "black";
            this.passwordCheckInput.style.borderColor = "black";
            this.buttonCreate.style.opacity = "initial";
            this.buttonCreate.addEventListener("mouseover", this.opacityButton);
            this.buttonCreate.addEventListener("mouseout",  this.opacityButton);
        }
        else {

            this.buttonCreate.style.opacity = "0.7";
            this.buttonCreate.disabled = "true";
            this.passwordInput.style.borderColor = "red";
            this.passwordCheckInput.style.borderColor = "red";
        }
    }

    /**
     * Init event with click
     */
    init() {
        if(this.buttonCreate) {
            this.buttonCreate.disabled = "true";
            this.buttonCreate.style.opacity = "0.7";
            this.passwordInput.addEventListener("keyup",  () => this.check());
            this.passwordCheckInput.addEventListener("keyup", () => this.check());
        }

    }

    /**
     * Change opacity for button create
     */
    opacityButton() {
        let button = document.getElementById("buttonCreate")
        if(button.style.opacity === "0.7") {
            button.style.opacity = "initial";
        }
        else  {
            button.style.opacity = "0.7";
        }
    }
}

export {CreateLogin};

