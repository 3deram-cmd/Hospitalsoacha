 // =========================
  // MENU
  // =========================
  const toggle = document.getElementById("menu-toggle");
  const nav = document.getElementById("nav");
  const overlay = document.getElementById("menu-overlay");

  if (toggle && nav && overlay) {
    toggle.addEventListener("click", function () {
      nav.classList.toggle("active");
      overlay.classList.toggle("active");
      document.body.classList.toggle("menu-open");
    });

    overlay.addEventListener("click", () => {
      nav.classList.remove("active");
      overlay.classList.remove("active");
      document.body.classList.remove("menu-open");
    });
  }