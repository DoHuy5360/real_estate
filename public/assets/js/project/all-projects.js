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
        project_name.classList.toggle("show_full--name");
    });
});
// todo: render corresponding flag image in project-view
function renderFlagImage() {
    let country_name = document.getElementById("user__country--name");
    document.getElementById("user__country--flag").src =
        LIST_COUNTRIES[country_name.innerText];
}
// todo: to switch tab project
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
function private_switchTabInProjectView(_on_of) {
    project_overview.style.borderBottom = _on_of
        ? "unset"
        : "5px solid #6B7280";
    user_show_projects_button.style.borderBottom = _on_of
        ? "5px solid #6B7280"
        : "unset";
    project_information_right_wrap.style.gridTemplateColumns = _on_of
        ? "unset"
        : "1fr 270px";
    project_contents.style.display = _on_of ? "none" : "block";
    project_information_right.style.display = _on_of ? "none" : "block";
    user_projects_all.style.display = _on_of ? "flex" : "none";
}
user_show_projects_button.addEventListener("click", (e) => {
    private_switchTabInProjectView(true);
});
project_overview.addEventListener("click", (e) => {
    private_switchTabInProjectView(false);
});

renderFlagImage();

// todo: project-view feature -> pause operation
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
