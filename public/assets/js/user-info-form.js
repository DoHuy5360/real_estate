document
    .getElementById("user__form-show")
    .addEventListener("click", (e) => {
        document.getElementById("dialog__register").showModal();
    });
document
    .getElementsByName("close-outline")[0]
    .addEventListener("click", (e) => {
        document.getElementById("dialog__register").close();
    });
let submit_register = document.getElementById("btn__submit--register");
let checkbox_register = document.getElementById("rgfield__input--accept");
checkbox_register.addEventListener("change", (e) => {
    if (checkbox_register.checked) {
        submit_register.removeAttribute("disabled");
    } else {
        submit_register.setAttribute("disabled", "disabled");
    }
});
// submit_register.addEventListener("click", (e) => {
//     console.log('Submited');
// });
