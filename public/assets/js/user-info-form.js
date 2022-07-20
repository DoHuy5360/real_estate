import { LIST_COUNTRIES } from "./features/countries.js";

// todo : Click event to show user's information
let country_name = document.getElementById("country__name");
let country_avatar = document.getElementById("country__image--small");
let user_form = document.getElementById("dialog__user--information");
document.getElementById("user__form-show").addEventListener("click", (e) => {
    user_form.showModal();
    country_avatar.src = LIST_COUNTRIES[country_name.value];
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
// todo change avatar function
let avatar_choose_url;
function chooseAvatar() {
    document.getElementById("dialog__choose--avatar").showModal();
    avatar_choose_url = document.getElementById("avatar__choose--url");
}
// todo : Click event to close user's information
document
    .getElementById("choose__avatar--submit")
    .addEventListener("click", (e) => {
        if (avatar_choose_url.value) {
            user_avatar.src = avatar_choose_url.value;
        }
        document.getElementById("dialog__choose--avatar").close();
    });
// todo : Click event to open mode setting
let user_description;
let user_avatar = document.getElementById("user__avatar");
let btn_user_setting = document.getElementById("btn__userInformation--setting");
btn_user_setting.addEventListener("click", (e) => {
    btn_user_setting.style.visibility = "hidden";
    save_user_setting.style.visibility = "visible";
    user_description = document.getElementById("card__user--description");
    user_description.removeAttribute("disabled");
    country_name.removeAttribute("disabled");
    user_avatar.addEventListener("click", chooseAvatar);
});
// todo : Click event to close mode setting
let save_user_setting = document.getElementById(
    "setting__userInformation--save"
);
console.log(LIST_COUNTRIES[country_name.value]);
save_user_setting.addEventListener("click", (e) => {
    save_user_setting.style.visibility = "hidden";
    btn_user_setting.style.visibility = "visible";
    user_description.setAttribue("disabled");
    country_name.setAttribue("disabled");
    user_avatar.removeEventListener("click", chooseAvatar);
});

//  todo : Click key event to stop exit user's information card
// user_info_card.scrollIntoView();
window.addEventListener("keydown", (e) => {
    if (e.key == "Escape" || e.keyCode == 27) {
        e.preventDefault();
    }
});
