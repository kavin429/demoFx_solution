// Toggle full menu
function toggleMenu() {
  document.querySelector("nav").classList.toggle("active");
  document.querySelector(".hamburger").classList.toggle("active");
}

// Dropdown toggle on mobile (only one open at a time)
document.querySelectorAll(".dropdown-toggle").forEach(item => {
  item.addEventListener("click", function(e) {
    if (window.innerWidth <= 900) { // only on mobile
      e.preventDefault();

      // Close all other dropdowns
      document.querySelectorAll(".dropdown").forEach(drop => {
        if (drop !== this.parentElement) {
          drop.classList.remove("open");
        }
      });

      // Toggle the clicked dropdown
      this.parentElement.classList.toggle("open");
    }
  });
});

//header

window.addEventListener("scroll", function() {
  const header = document.querySelector("header");
  const hero = document.querySelector(".hero");
  if (!header || !hero) return;

  if (window.scrollY > hero.offsetHeight - 80) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
});





// ANIMATION
{
  const sections = document.querySelectorAll(".fade-section");
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
      } else {
        entry.target.classList.remove("show");
      }
    });
  }, { threshold: 0.15 });

  sections.forEach((section) => observer.observe(section));
}



