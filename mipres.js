document.querySelectorAll(".accordion-header").forEach(header => {
  header.addEventListener("click", () => {
    const item = header.parentElement;
    const icon = header.querySelector(".icon");

    const isActive = item.classList.contains("active");

    document.querySelectorAll(".accordion-item").forEach(i => {
      i.classList.remove("active");
      i.querySelector(".icon").textContent = "+";
    });

    if (!isActive) {
      item.classList.add("active");
      icon.textContent = "-";
    }
  });
});