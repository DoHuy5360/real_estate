import { LIST_COUNTRIES } from "../features/countries.js";

// todo: edit project
let edit_project_button = document.getElementById("button__project--edit"),
    edit_project_save = document.getElementById("button__project--save"),
    project_address = document.getElementById("project__address--view"),
    project_price = document.getElementById("project__price--view"),
    project_title = document.getElementById("leftContent__project--title"),
    project_image = document.getElementById("project__image--big"),
    project_area = document.getElementById("project__area--view"),
    project_type = document.getElementById("leftContent__project--type"),
    project_tip = document.getElementById("project__tip--view"),
    project_description = document.getElementById(
        "leftContent__project--description"
    );

function removeAttributeToMultipleObjects(_attributeName, ..._objects) {
    //? _attributeName is name of the attribute that will removed from all element in _objects
    for (const object of _objects) {
        object.removeAttribute(_attributeName, _attributeName);
    }
}
function addClassToMultipleObjects(_className, ..._objects) {
    //? _className is name of the class that will added to all element in _objects
    for (const object of _objects) {
        object.classList.add(_className);
    }
}
edit_project_button.addEventListener("click", (e) => {
    removeAttributeToMultipleObjects(
        "disabled",
        project_title,
        project_type,
        project_description,
        project_price,
        project_address,
        project_area,
        project_tip
    );
    addClassToMultipleObjects(
        "edit",
        project_title,
        project_type,
        project_description,
        project_image,
        project_price,
        project_address,
        project_area,
        project_tip
    );
    project_image.type = "text";
    project_image.value = project_image.src;
    // todo: toggle button edit and save
    edit_project_button.style.display = "none";
    edit_project_save.style.display = "flex";
});
