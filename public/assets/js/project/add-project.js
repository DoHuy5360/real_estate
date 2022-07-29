import { LIST_COUNTRIES } from "../features/countries.js";

// todo: render demo image in add project view
let input_project_add_avatar = document.getElementById(
    "project__projectAddimage--big"
);
input_project_add_avatar.addEventListener("input", (e) => {
    document.getElementById(
        "projectAdd__demo--image"
    ).style.backgroundImage = `url(${input_project_add_avatar.value})`;
});
// todo: Ask before exist
let button_ask_before_exit = document.getElementById("project__button--add");
button_ask_before_exit.addEventListener("click", (e) => {
    let isConfirmToExit = confirm("Bạn có chắc?");
    if (isConfirmToExit) {
        window.location.href = window.location.origin + "/projects";
    }
});
