import "./bootstrap";

document.addEventListener("DOMContentLoaded", () => {
    const prefersReducedMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)",
    ).matches;

    initTypingAnimation(prefersReducedMotion);
    initScrollReveal(prefersReducedMotion);
    initSkillBars(prefersReducedMotion);
    initStatsCounters(prefersReducedMotion);
});

function initTypingAnimation(prefersReducedMotion) {
    const target = document.querySelector("[data-typing]");

    if (!target) return;

    const texts = [
        "Information Technology Student",
        "Web Developer",
        "IoT Enthusiast",
        "AI & Machine Learning Learner",
    ];

    if (prefersReducedMotion) {
        target.textContent = texts[0];
        return;
    }

    let textIndex = 0;
    let charIndex = 0;
    let isDeleting = false;

    const type = () => {
        const currentText = texts[textIndex];
        const nextText = isDeleting
            ? currentText.slice(0, Math.max(charIndex - 1, 0))
            : currentText.slice(0, charIndex + 1);

        target.textContent = nextText;
        charIndex = nextText.length;

        let delay = isDeleting ? 45 : 85;

        if (!isDeleting && charIndex === currentText.length) {
            delay = 1400;
            isDeleting = true;
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            textIndex = (textIndex + 1) % texts.length;
            delay = 350;
        }

        window.setTimeout(type, delay);
    };

    window.setTimeout(type, 400);
}

function initScrollReveal(prefersReducedMotion) {
    const elements = Array.from(document.querySelectorAll("[data-animate]"));

    if (!elements.length) return;

    elements.forEach((element, index) => {
        element.classList.add("scroll-reveal");

        if (element.dataset.delay) {
            element.style.transitionDelay = `${element.dataset.delay}ms`;
        } else {
            element.style.transitionDelay = `${Math.min(index % 6, 5) * 70}ms`;
        }
    });

    if (prefersReducedMotion || !("IntersectionObserver" in window)) {
        elements.forEach((element) => element.classList.add("is-visible"));
        return;
    }

    const revealObserver = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;

                entry.target.classList.add("is-visible");
                observer.unobserve(entry.target);
            });
        },
        {
            threshold: 0.14,
            rootMargin: "0px 0px -40px 0px",
        },
    );

    elements.forEach((element) => revealObserver.observe(element));
}

function initSkillBars(prefersReducedMotion) {
    const bars = Array.from(document.querySelectorAll("[data-skill-bar]"));

    if (!bars.length) return;

    const fillBar = (bar) => {
        const value = Math.min(Number(bar.dataset.skillValue || 0), 100);
        bar.style.width = `${value}%`;
    };

    if (prefersReducedMotion || !("IntersectionObserver" in window)) {
        bars.forEach(fillBar);
        return;
    }

    const skillObserver = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;

                fillBar(entry.target);
                observer.unobserve(entry.target);
            });
        },
        {
            threshold: 0.45,
        },
    );

    bars.forEach((bar) => skillObserver.observe(bar));
}

function initStatsCounters(prefersReducedMotion) {
    const counters = Array.from(
        document.querySelectorAll("[data-stat-counter]"),
    );

    if (!counters.length) return;

    const setFinalValue = (counter) => {
        const target = Number(counter.dataset.statTarget || 0);
        const decimals = Number(counter.dataset.statDecimals || 0);
        const suffix = counter.dataset.statSuffix || "";

        counter.textContent = `${target.toFixed(decimals)}${suffix}`;
    };

    const animateCounter = (counter) => {
        const target = Number(counter.dataset.statTarget || 0);
        const decimals = Number(counter.dataset.statDecimals || 0);
        const suffix = counter.dataset.statSuffix || "";
        const duration = Number(counter.dataset.statDuration || 1200);
        const startTime = performance.now();

        const update = (currentTime) => {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const easedProgress = 1 - Math.pow(1 - progress, 3);
            const currentValue = target * easedProgress;

            counter.textContent = `${currentValue.toFixed(decimals)}${suffix}`;

            if (progress < 1) {
                requestAnimationFrame(update);
            } else {
                setFinalValue(counter);
            }
        };

        requestAnimationFrame(update);
    };

    if (prefersReducedMotion || !("IntersectionObserver" in window)) {
        counters.forEach(setFinalValue);
        return;
    }

    const counterObserver = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;

                animateCounter(entry.target);
                observer.unobserve(entry.target);
            });
        },
        {
            threshold: 0.5,
        },
    );

    counters.forEach((counter) => counterObserver.observe(counter));
}
