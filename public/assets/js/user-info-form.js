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
        if (edit_avatar_mode) {
            user_avatar.removeEventListener("click", chooseAvatar);
        }
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
let avatar_choose_url;
function chooseAvatar() {
    document.getElementById("dialog__choose--avatar").showModal();
    avatar_choose_url = document.getElementById("avatar__choose--url");
}
document
    .getElementById("choose__avatar--submit")
    .addEventListener("click", (e) => {
        if (avatar_choose_url.value) {
            user_avatar.src = avatar_choose_url.value;
        }
        document.getElementById("dialog__choose--avatar").close();
    });
let user_description;
let edit_avatar_mode = false;
let user_avatar = document.getElementById("user__avatar");
let btn_user_setting = document.getElementById("btn__userInformation--setting");

btn_user_setting.addEventListener("click", (e) => {
    btn_user_setting.style.visibility = "hidden";
    save_user_setting.style.visibility = "visible";
    user_description = document.getElementById("card__user--description");
    user_description.removeAttribute("disabled");
    user_avatar.addEventListener("click", chooseAvatar);
    // if (!edit_avatar_mode) {
    //     edit_avatar_mode = true;
    // } else {
    //     user_avatar.removeEventListener("click", chooseAvatar);
    //     edit_avatar_mode = false;
    // }
});
let save_user_setting = document.getElementById(
    "setting__userInformation--save"
);
save_user_setting.addEventListener("click", (e) => {
    save_user_setting.style.visibility = "hidden";
    btn_user_setting.style.visibility = "visible";
    user_description.setAttribue("disabled");
    user_avatar.removeEventListener("click", chooseAvatar);
});
