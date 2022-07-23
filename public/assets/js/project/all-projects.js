import { LIST_COUNTRIES } from "../features/countries.js";

// todo: Help to see user information beside the project
// let project_creator_infomations = document.getElementById('creator__avatar--inprojects');

// project_creator_infomations.forEach((creator_avatar) => {
//     creator_avatar.addEventListener("click", (e) => {
//         creator_avatar.classList.toggle("product__creator--explorer");
//     });
// });
let card_project_name = document.querySelectorAll(".card__project--name");

card_project_name.forEach((project_name) => {
    project_name.addEventListener("click", (e) => {
        project_name.classList.toggle('show_full--name')
    });
});
// todo: render corresponding flag image in project-view
function renderFlagImage() {
    let country_name = document.getElementById("user__country--name");
    document.getElementById("user__country--flag").src =
        LIST_COUNTRIES[country_name.innerText];
}

let user_show_projects_button = document.getElementById(
    "project__showAll--relative"
);
let project_overview = document.getElementById(
    "project__showProject--information"
);
let user_projects_all = document.getElementById("author__projects--all");
let project_contents = document.getElementById("project__information--content");
let project_information_right = document.getElementById("div__embed--fixed");
let project_information_right_wrap = document.getElementById(
    "project__content--information"
);
user_show_projects_button.addEventListener("click", (e) => {
    project_contents.style.display = "none";
    project_overview.style.borderBottom = "unset";
    user_show_projects_button.style.borderBottom = "5px solid #6B7280";
    project_information_right.style.display = "none";
    user_projects_all.style.display = "flex";
    project_information_right_wrap.style.gridTemplateColumns = "unset";
});
project_overview.addEventListener("click", (e) => {
    project_contents.style.display = "block";
    project_overview.style.borderBottom = "5px solid #6B7280";
    user_show_projects_button.style.borderBottom = "unset";
    project_information_right.style.display = "block";
    user_projects_all.style.display = "none";
    project_information_right_wrap.style.gridTemplateColumns = "1fr 270px";
});

renderFlagImage();

// todo : project-view feature -> pause operation
// window.onscroll = function () {
//     fixed();
//     console.log(window.location.href);
// };

// function fixed() {
//     if (
//         document.body.scrollTop > 510 ||
//         document.documentElement.scrollTop > 510
//     ) {
//         document.querySelector(".project__content--right").style.position =
//             "fixed";
//         document.querySelector(".project__content--right").style.top = "90px";
//     } else if (
//         document.body.scrollTop < 510 ||
//         document.documentElement.scrollTop < 510
//     ) {
//         document.querySelector(".project__content--right").style.position =
//             "relative";
//         document.querySelector(".project__content--right").style.top = "unset";
//     }
// }
