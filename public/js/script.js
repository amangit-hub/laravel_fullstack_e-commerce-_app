const navBar = document.getElementById("navbar");
navBar.style.maxHeight = "0px"; // Start collapsed

console.log("hello");
function toggleMenu() {
    if (navBar.style.maxHeight === "0px") {
        navBar.style.maxHeight = "100vh";
        navBar.style.background = "#364e3e";
    } else {
        navBar.style.maxHeight = "0px";
        navBar.style.background = "none";
    }
}
