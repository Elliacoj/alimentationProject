let $buttonCreate = document.getElementById("buttonCreate");
let $passwordInput = document.getElementById("createPassword");
let $passwordCheckInput = document.getElementById("createCheckPassword");

if($passwordInput) {
    $buttonCreate.disabled = "true";
    $buttonCreate.style.opacity = "0.7";

    $passwordInput.addEventListener("keyup", function () {
        check($buttonCreate, $passwordInput, $passwordCheckInput);
    })

    $passwordCheckInput.addEventListener("keyup", function () {
        check($buttonCreate, $passwordInput, $passwordCheckInput);
    })
}



/**
 * Check if password is correct
 * @param $button
 * @param $content
 * @param $contentCheck
 */
function check($button, $content, $contentCheck) {
    const $regex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)(?=.*[@$!%*?&])[A-Za-z\\d@$!%*?&]{8,}$");
    $button.removeEventListener("mouseover", opacityButton);
    $button.removeEventListener("mouseout", opacityButton);

    if((!$regex.test($content.value) === false) && ($content.value === $contentCheck.value)) {
        $button.removeAttribute("disabled");
        $content.style.borderColor = "black";
        $contentCheck.style.borderColor = "black";
        $buttonCreate.style.opacity = "initial";
        $button.addEventListener("mouseover", opacityButton);
        $button.addEventListener("mouseout", opacityButton);
    }
    else {
        $button.style.opacity = "0.7";
        $button.disabled = "true";
        $content.style.borderColor = "red";
        $contentCheck.style.borderColor = "red";
    }
}

function opacityButton() {
    if($buttonCreate.style.opacity === "0.7") {
        $buttonCreate.style.opacity = "initial";
    }
    else  {
        $buttonCreate.style.opacity = "0.7";
    }
}