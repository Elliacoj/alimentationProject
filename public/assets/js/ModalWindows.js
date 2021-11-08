export {ModalWindows};
class ModalWindows {
    constructor(height, width, element, title, data = []) {
        this.height = height;
        this.width = width;
        this.element = element;
        this.data = data;
        this.title = title;

        let container = document.createElement("div");
        let buttonConfirm = document.createElement("button");
        let buttonBack = document.createElement("button")
    }

    create() {
        let h2 = document.createElement("h2");
        h2.innerHTML = this.title;

        for (let name in this.data) {
            let div = document.createElement("div");
            let label = document.createElement("label");
            let input = document.createElement("input");

            label.innerHTML = name;
            input.value = this.data[name];
        }
    }
}
