// Sticky Navigation
window.addEventListener("scroll", () => {
    const header = document.querySelector(".site-header");
    if (window.scrollY > 50) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});

// Mobile Navigation Toggle (Hamburger Menu)
const navToggle = document.querySelector(".nav-toggle");
const navLinks = document.querySelector(".nav-links");

if (navToggle && navLinks) {
    navToggle.addEventListener("click", () => {
        const isExpanded = navToggle.getAttribute("aria-expanded") === "true";
        navToggle.setAttribute("aria-expanded", !isExpanded);
        navLinks.classList.toggle("active");
        
        // Toggle body scroll lock when menu is open
        if (!isExpanded) {
            document.body.style.overflow = "hidden";
        } else {
            document.body.style.overflow = "";
        }
    });
    
    // Close menu when clicking on a link
    navLinks.querySelectorAll("a").forEach(link => {
        link.addEventListener("click", () => {
            navToggle.setAttribute("aria-expanded", "false");
            navLinks.classList.remove("active");
            document.body.style.overflow = "";
        });
    });
    
    // Close menu on escape key
    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape" && navLinks.classList.contains("active")) {
            navToggle.setAttribute("aria-expanded", "false");
            navLinks.classList.remove("active");
            document.body.style.overflow = "";
            navToggle.focus();
        }
    });
}

// Smooth Scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function (e) {
        const targetSelector = this.getAttribute("href");
        if (!targetSelector || targetSelector === "#") {
            return;
        }

        const target = document.querySelector(targetSelector);
        if (!target) {
            return;
        }

        e.preventDefault();
        target.scrollIntoView({
            behavior: "smooth"
        });

        // Close mobile menu after clicking a link
        if (navLinks && navLinks.classList.contains("active")) {
            navLinks.classList.remove("active");
        }
    });
});

// Active Navigation Highlighting
const sections = document.querySelectorAll("section");
const navLi = document.querySelectorAll(".nav-links li a");

const observerOptions = {
    root: null,
    rootMargin: "0px",
    threshold: 0.7
};

const sectionObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            navLi.forEach(link => {
                link.classList.remove("active");
                if (link.getAttribute("href").includes(entry.target.id)) {
                    link.classList.add("active");
                }
            });
        }
    });
}, observerOptions);

sections.forEach(section => {
    sectionObserver.observe(section);
});

// Scroll Animations (for elements like sector-item and contact-form)
const animateOnScroll = document.querySelectorAll(".sector-item, .contact-form");

const animateObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add("fade-in-up"); // Add a CSS class for animation
            observer.unobserve(entry.target);
        }
    });
}, { threshold: 0.1 });

animateOnScroll.forEach(element => {
    animateObserver.observe(element);
});

// Form Validation
const contactForm = document.querySelector(".contact-form");

if (contactForm) {
    contactForm.addEventListener("submit", function(e) {
        const nameInput = this.querySelector('input[name="name"], input[name="fname"], input[type="text"]');
        const emailInput = this.querySelector('input[type="email"]');
        const messageTextarea = this.querySelector("textarea");
        const requiredFields = this.querySelectorAll("input[required], textarea[required], select[required]");

        let isValid = true;

        requiredFields.forEach(field => {
            const isCheckbox = field.type === "checkbox";
            const valueMissing = isCheckbox ? !field.checked : field.value.trim() === "";

            if (valueMissing) {
                showError(field, field.type === "checkbox" ? "This consent is required." : "This field is required.");
                isValid = false;
            } else {
                hideError(field);
            }
        });

        // Basic validation for email
        if (!emailInput || emailInput.value.trim() === "") {
            showError(emailInput, "Email is required.");
            isValid = false;
        } else if (!isValidEmail(emailInput.value.trim())) {
            showError(emailInput, "Please enter a valid email address.");
            isValid = false;
        } else {
            hideError(emailInput);
        }

        if (isValid) {
            // Allow the browser to submit the form to the configured backend.
            return true;
        } else {
            e.preventDefault();
            alert("Please correct the errors in the form.");
        }
    });
}

function showError(input, message) {
    if (!input) {
        return;
    }

    const formControl = input.parentElement; // Assuming input is directly inside .contact-form
    let errorElement = formControl.querySelector(".error-message");

    if (!errorElement) {
        errorElement = document.createElement("div");
        errorElement.classList.add("error-message");
        formControl.appendChild(errorElement);
    }
    errorElement.textContent = message;
    input.classList.add("error"); // Add a class for error styling
}

function hideError(input) {
    if (!input) {
        return;
    }

    const formControl = input.parentElement;
    const errorElement = formControl.querySelector(".error-message");
    if (errorElement) {
        errorElement.remove();
    }
    input.classList.remove("error");
}

function isValidEmail(email) {
    // Basic client-side email validation. Server-side validation still runs in mail.php.
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

// Back-to-top button
const backToTopButton = document.createElement("button");
backToTopButton.textContent = "↑";
backToTopButton.classList.add("back-to-top");
document.body.appendChild(backToTopButton);

backToTopButton.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
});

window.addEventListener("scroll", () => {
    if (window.scrollY > 300) {
        backToTopButton.classList.add("show");
    } else {
        backToTopButton.classList.remove("show");
    }
});

// Utility for performance: Debounce function (example, not strictly required for current features)
// function debounce(func, delay) {
//     let timeout;
//     return function(...args) {
//         const context = this;
//         clearTimeout(timeout);
//         timeout = setTimeout(() => func.apply(context, args), delay);
//     };
// }
