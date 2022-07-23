let cart_frame_height = document.getElementById("cart__frame--wrap");
let add_height = 500;
document
    .getElementById("product__button--showMore")
    .addEventListener("click", (e) => {
        let new_height = cart_frame_height.offsetHeight + add_height
        cart_frame_height.style.height = `${new_height}px`;
    });
