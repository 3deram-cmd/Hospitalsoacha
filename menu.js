document.addEventListener("DOMContentLoaded", function () {

 
  // =========================
  // SUBMENUS MOBILE
  // =========================
  const navItems = document.querySelectorAll(".nav-item");

  navItems.forEach(item => {
    const link = item.querySelector(".nav-link");

    if (link) {
      link.addEventListener("click", (e) => {
        if (window.innerWidth <= 767) {
          e.preventDefault();

          navItems.forEach(i => {
            if (i !== item) i.classList.remove("active");
          });

          item.classList.toggle("active");
        }
      });
    }
  });

  
 

});