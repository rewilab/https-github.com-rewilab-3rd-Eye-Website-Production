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
        const expanded = navLinks.classList.toggle("active");
        navToggle.setAttribute("aria-expanded", expanded ? "true" : "false");
    });
}

// Close mobile menu when a link is clicked (helpful on single-page anchors)
if (navLinks) {
    navLinks.querySelectorAll("a").forEach(link => {
        link.addEventListener("click", () => {
            if (navLinks.classList.contains("active") && navToggle) {
                navLinks.classList.remove("active");
                navToggle.setAttribute("aria-expanded", "false");
            }
        });
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

// Contact form: load signed anti-bot token, validate, submit via fetch, show status.
const contactForm = document.querySelector(".contact-form");

// Fetch a server-issued, time-bound, signed token on load so the form is
// protected against forged/instant bot submissions. If the request fails the
// field stays empty and mail.php will reject the submission gracefully.
if (contactForm) {
    const tokenField = contactForm.querySelector("#form_token");
    if (tokenField) {
        fetch("mail.php?action=form_token", { cache: "no-store" })
            .then(r => r.ok ? r.json() : Promise.reject(r.status))
            .then(data => { if (data && data.token) tokenField.value = data.token; })
            .catch(() => { /* leave empty; server will guide the user to reload */ });
    }
}

if (contactForm) {
    const submitBtn = contactForm.querySelector('button[type="submit"]');
    const statusBox = contactForm.querySelector("#form-status");

    function showStatus(msg, type) {
        if (!statusBox) return;
        statusBox.textContent = msg;
        statusBox.classList.remove("success", "error", "show");
        if (type) {
            statusBox.classList.add(type, "show");
        }
        statusBox.scrollIntoView({ behavior: "smooth", block: "nearest" });
    }

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

        if (!isValid) {
            e.preventDefault();
            showStatus("Please correct the highlighted fields and try again.", "error");
            return;
        }

        e.preventDefault();

        // Submit via fetch so the visitor stays on the page and sees a clean
        // status message instead of a raw text response.
        const formData = new FormData(contactForm);
        const originalLabel = submitBtn ? submitBtn.textContent : "Submit";
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.textContent = "Sending…";
        }
        showStatus("Sending your message…", "");

        fetch(contactForm.action, {
            method: "POST",
            body: formData,
            headers: { "Accept": "text/plain" }
        }).then(resp => resp.text().then(text => ({ ok: resp.ok, status: resp.status, text })))
          .then(({ ok, status, text }) => {
            if (ok) {
                contactForm.reset();
                showStatus(text || "Thank you. Your message has been sent.", "success");
            } else if (status === 429) {
                showStatus(text || "Too many submissions. Please try again later.", "error");
            } else {
                showStatus(text || "We could not send your message. Please review and try again.", "error");
            }
          })
          .catch(() => {
            showStatus("A network error occurred. Please check your connection and try again.", "error");
          })
          .finally(() => {
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.textContent = originalLabel;
            }
            // Re-fetch a fresh token after the reset so the next submit is valid.
            const tk = contactForm.querySelector("#form_token");
            if (tk) {
                fetch("mail.php?action=form_token", { cache: "no-store" })
                    .then(r => r.ok ? r.json() : Promise.reject())
                    .then(data => { if (data && data.token) tk.value = data.token; })
                    .catch(() => {});
            }
          });
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
