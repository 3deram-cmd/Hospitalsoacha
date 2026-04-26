const headers = document.querySelectorAll(".card-header");

headers.forEach(header => {

  header.addEventListener("click", () => {

    const content = header.nextElementSibling;
    const icon = header.querySelector("span");

    const isOpen = content.classList.contains("active");

    // cerrar todos
    document.querySelectorAll(".card-content").forEach(c => {
      c.classList.remove("active");
    });

    document.querySelectorAll(".card-header span").forEach(s => {
      s.textContent = "+";
    });

    // abrir actual
    if (!isOpen) {
      content.classList.add("active");
      if (icon) icon.textContent = "−";
    }

  });

});
