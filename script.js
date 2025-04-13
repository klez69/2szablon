// Płynne przewijanie do sekcji
document.querySelectorAll("nav a").forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const targetId = this.getAttribute("href");
    const targetSection = document.querySelector(targetId);
    targetSection.scrollIntoView({ behavior: "smooth" });
  });
});

// Animacja pojawiania się sekcji podczas przewijania
const sections = document.querySelectorAll(".section");
const observerOptions = {
  threshold: 0.1,
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.style.opacity = "1";
      entry.target.style.transform = "translateY(0)";
    }
  });
}, observerOptions);

sections.forEach((section) => {
  section.style.opacity = "0";
  section.style.transform = "translateY(20px)";
  section.style.transition = "all 0.5s ease-in-out";
  observer.observe(section);
});

// Animacja menu przy przewijaniu
let lastScroll = 0;
const nav = document.querySelector("nav");

window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;

  if (currentScroll <= 0) {
    nav.style.transform = "translateY(0)";
  } else if (currentScroll > lastScroll) {
    nav.style.transform = "translateY(-100%)";
  } else {
    nav.style.transform = "translateY(0)";
  }

  lastScroll = currentScroll;
});

// Stylizacja stopki
const footerStyle = document.createElement("style");
footerStyle.textContent = `
@keyframes rainbow {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

footer {
    position: relative;
    width: 100%;
    background: linear-gradient(90deg, red, orange, yellow, green, blue, indigo, violet);
    background-size: 400% 400%;
    color: white;
    text-align: center;
    padding: 20px 0;
    font-size: 0.9em;
    box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2);
    animation: rainbow 5s infinite;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Dodanie cienia do tekstu */
}

img {
    border: none; /* Usunięcie ramki */
    outline: none; /* Usunięcie obramowania */
}

a img {
    border: none; /* Usunięcie ramki */
    outline: none; /* Usunięcie obramowania */
}
`;
document.head.appendChild(footerStyle);
