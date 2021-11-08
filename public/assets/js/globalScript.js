let errorDiv = document.querySelector(".errorDiv");

/**
 * Animation for error view
 */
if(errorDiv) {
    setTimeout(function () {
        errorDiv.animate([
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