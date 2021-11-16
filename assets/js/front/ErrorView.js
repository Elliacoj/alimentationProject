class ErrorView {
    /**
     * Constructor
     */
    constructor() {
        this.errorDiv = document.querySelector(".errorDiv");
    }

    /**
     * Set the animation
     */
    init() {
        if(this.errorDiv) {
            setTimeout(() => {
                this.errorDiv.animate([
                    {height: '50px'},
                    {height: '0'}
                ], {
                    duration: 500,
                    iterations: 1,
                    fill: "forwards",
                    easing: "linear"
                });
            }, 3000);
        }
    }
}
export {ErrorView};