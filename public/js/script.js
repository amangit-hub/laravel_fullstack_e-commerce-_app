const navBar = document.getElementById("navbar");
navBar.style.maxHeight = "0px"; // Start collapsed

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
                    entry.target.classList.add("animate"); // Trigger animation
                    observer.unobserve(entry.target); // Stop observing once animated
                }
            });
        },
        {
            threshold: 0.1, // Adjust this to control when the animation starts
        }
    );

    animatedElements.forEach((element) => {
        observer.observe(element);
    });
});
