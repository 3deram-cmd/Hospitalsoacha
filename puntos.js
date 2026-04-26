document.addEventListener("DOMContentLoaded", () => {

  const accordionHeaders = document.querySelectorAll(".accordion-header");

  accordionHeaders.forEach(header => {
    header.addEventListener("click", () => {

      const content = header.nextElementSibling;

      document.querySelectorAll(".accordion-content").forEach(item => {
        if (item !== content) {
          item.style.display = "none";
        }
      });

      content.style.display =
        content.style.display === "block" ? "none" : "block";
    });
  });

});