/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById("nav-menu"),
    navToggle = document.getElementById("nav-toggle"),
    navClose = document.getElementById("nav-close");

/*===== MENU SHOW =====*/
if (navToggle) {
    navToggle.addEventListener("click", () => {
        navMenu.classList.add("show-menu");
    });
}

/*===== MENU HIDDEN =====*/
if (navClose) {
    navClose.addEventListener("click", () => {
        navMenu.classList.remove("show-menu");
    });
}

/*=============== main slider ===============*/

var swiper = new Swiper(".my-slider-container", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    autoplay: {
        delay: 5000, // Time between slide transitions (in milliseconds)
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});



/*=============== main slider ===============*/

var swiper = new Swiper(".myswiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    autoplay: {
        delay: 5000, // Time between slide transitions (in milliseconds)
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});



/*=============== REMOVE MENU MOBILE ===============*/
const navLink = document.querySelectorAll(".nav__link");

function linkAction() {
    const navMenu = document.getElementById("nav-menu");
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove("show-menu");
}
navLink.forEach((n) => n.addEventListener("click", linkAction));

/*=============== CHANGE BACKGROUND HEADER ===============*/
function scrollHeader() {
    const header = document.getElementById("header");
    // When the scroll is greater than 50 viewport height, add the scroll-header class to the header tag
    if (this.scrollY >= 50) header.classList.add("scroll-header");
    else header.classList.remove("scroll-header");
}
window.addEventListener("scroll", scrollHeader);

/*=============== SHOW SCROLL UP ===============*/
function scrollUp() {
    const scrollUp = document.getElementById("scroll-up");
    // When the scroll is higher than 350 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if (this.scrollY >= 350) scrollUp.classList.add("show-scroll");
    else scrollUp.classList.remove("show-scroll");
}
window.addEventListener("scroll", scrollUp);

/*=============== dark mode ===============*/
function toggleDarkMode() {
    var body = document.body;
    var darkIcon = document.querySelector(".dark-icon");
    var lightIcon = document.querySelector(".light-icon");
    var defaultLogo = document.querySelector(".default-logo");
    var darkModeLogo = document.querySelector(".dark-mode-logo");
    var footerdefaultLogo = document.querySelector(".footer-default-logo");
    var footerdarkModeLogo = document.querySelector(".footer-dark-mode-logo");

    body.classList.toggle("dark-mode");
    body.classList.toggle("disable-background");

    // Store the dark mode preference in sessionStorage
    var isDarkMode = body.classList.contains("dark-mode");
    sessionStorage.setItem("darkMode", isDarkMode);

    if (isDarkMode) {
        darkIcon.style.display = "inline-block";
        lightIcon.style.display = "none";
        defaultLogo.style.display = "none";
        darkModeLogo.style.display = "inline-block";
        footerdefaultLogo.style.display = "none";
        footerdarkModeLogo.style.display = "inline-block";
    } else {
        darkIcon.style.display = "none";
        lightIcon.style.display = "inline-block";
        footerdefaultLogo.style.display = "inline-block";
        footerdarkModeLogo.style.display = "none";
    }
}

// Check if the user has a previous dark mode preference from sessionStorage
var storedDarkMode = sessionStorage.getItem("darkMode");
if (storedDarkMode === "true") {
    document.body.classList.add("dark-mode");
}


/*=============== scroll reveal fade in ===============*/
const sr = ScrollReveal({
    origin: "bottom",
    distance: "50px",
    duration: 1500,
    delay: 500,
    // reset: true,
});

function fadeOutSlideContent() {
    const slideContent = document.querySelector(".slide-content");
    slideContent.classList.add("fade-out");
}

// Call the fadeOutSlideContent function after 10 seconds (10000 milliseconds)
setTimeout(fadeOutSlideContent, 6000);

const animateElements = document.querySelectorAll(".animate-element");
animateElements.forEach((element) => {
    sr.reveal(element);
});

sr.reveal(".animate-element", { interval: 500 });

/*=============== pure fade in ===============*/
function handleIntersection(entries, observer) {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add("fade-in");
            observer.unobserve(entry.target);
        }
    });
}

function createObserver() {
    const elements = document.querySelectorAll(".fade-in");
    const options = {
        root: null,
        rootMargin: "0px",
        threshold: 0.25,
    };

    const observer = new IntersectionObserver(handleIntersection, options);
    elements.forEach((element) => observer.observe(element));
}


