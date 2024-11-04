const navBar = document.getElementById("navbar");
navBar.style.maxHeight = "0px";

function toggleMenu() {
    if (navBar.style.maxHeight === "0px") {
        navBar.style.maxHeight = "100vh";
        navBar.style.background = "#364e3e";
    } else {
        navBar.style.maxHeight = "0px";
        navBar.style.background = "none";
    }
}
document.addEventListener("DOMContentLoaded", function () {
    const animatedElements = document.querySelectorAll(".animate");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("animate");
                    observer.unobserve(entry.target);
                }
            });
        },
        {
            threshold: 0.1,
        }
    );

    animatedElements.forEach((element) => {
        observer.observe(element);
    });
});

const imgContainer = document.getElementById("imgContainer");
const previous = document.getElementById("previous");
const next = document.getElementById("next");
imgContainer.addEventListener("wheel", (event) => {
    event.preventDefault();
    imgContainer.scrollLeft += deltaY;
});
