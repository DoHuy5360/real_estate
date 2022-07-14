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
window.onscroll = () => {
    if (
        document.body.scrollTop > 100 ||
        document.documentElement.scrollTop > 100
    ) {
        document.getElementById("header").style.backgroundColor = "#ffffffa5";
    } else {
        document.getElementById("header").style.backgroundColor = "transparent";
    }
    console.log();
};
