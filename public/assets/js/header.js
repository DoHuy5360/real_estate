// window.onscroll = function () {
//     headerScroll();
// };

// function headerScroll() {
//     if (
//         document.body.scrollTop > 100 ||
//         document.documentElement.scrollTop > 100
//     ) {
//         document.getElementById("header").style.backgroundColor = "#ffffffa5";
//         console.log(1);
//     }else{
//         document.getElementById("header").style.backgroundColor = "transparent";
//     }
// }
let navbar = document.getElementById("header");
let current_scroll_value;
window.onscroll = () => {
    if (
        current_scroll_value > 100 ||
        document.documentElement.scrollTop > 100
    ) {
        navbar.style.top = "-100px";
    }
    if (document.documentElement.scrollTop < current_scroll_value) {
        navbar.style.top = "0";
        current_scroll_value = document.body.scrollTop;
    }
    current_scroll_value = document.documentElement.scrollTop;
};
let root = document.querySelector(":root");
// let root_styles = getComputedStyle(root);

let color_palate;
color_palate = {
    "--white-pure": "#F5F5F5",
    "--gray-soft": "#F05454",
    "--gray-solid": "#30475E",
    "--black-pure": "#121212",
};
color_palate = {
    "--white-pure": "#4BAEA0",
    "--gray-soft": "#B6E6BD",
    "--gray-solid": "#F1F0CF",
    "--black-pure": "#F0C9C9",
};

function setTheme(_colors){
    for (const name in _colors) {
        root.style.setProperty(name, _colors[name]);
    }
}
setTheme(color_palate)
