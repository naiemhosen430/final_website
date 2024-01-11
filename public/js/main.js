document.getElementById("toggler").addEventListener("click", toggle_menu);
const mobile_menu = document.getElementById("mobile_menu");

function toggle_menu() {
    if (mobile_menu.style.display === "none") {
        mobile_menu.style.display = "block";
    } else {
        mobile_menu.style.display = "none";
    }
}
