let user_form = document.getElementById("dialog__user--information");
document.getElementById("user__form-show").addEventListener("click", (e) => {
    user_form.showModal();
    user_form.style = `
            top: ${window.pageYOffset}px;
            left: ${document.documentElement.clientWidth / 2}px;
        `;
    document.body.style.overflow = "hidden";
});
document
    .getElementsByName("close-outline")[0]
    .addEventListener("click", (e) => {
        user_form.close();
        document.body.style.overflow = "auto";
    });
// let submit_register = document.getElementById("btn__submit--register");
// let checkbox_register = document.getElementById("rgfield__input--accept");
// checkbox_register.addEventListener("change", (e) => {
//     if (checkbox_register.checked) {
//         submit_register.removeAttribute("disabled");
//     } else {
//         submit_register.setAttribute("disabled", "disabled");
//     }
// });
// submit_register.addEventListener("click", (e) => {
//     console.log('Submited');
// });
