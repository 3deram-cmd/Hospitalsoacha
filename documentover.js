document.querySelectorAll(".accordion-header").forEach(btn => {
  btn.addEventListener("click", function () {

    const item = this.parentElement;
    const isActive = item.classList.contains("active");

    // cerrar todos
    document.querySelectorAll(".accordion-item").forEach(i => {
      i.classList.remove("active");
      i.querySelector(".icon").textContent = "+";
    });

    // abrir actual si estaba cerrado
    if (!isActive) {
      item.classList.add("active");
      this.querySelector(".icon").textContent = "−";
    }

  });
});