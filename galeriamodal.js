// =========================
  // GALERIA MODAL
  // =========================
  const imagenes = document.querySelectorAll(".img-click");
  const modalGaleria = document.getElementById("modal");
  const modalImg = document.getElementById("modal-img");
  const cerrarGaleria = document.querySelector(".cerrar");

  if (imagenes && modalGaleria && modalImg && cerrarGaleria) {
    imagenes.forEach(img => {
      img.addEventListener("click", () => {
        modalImg.src = img.src;
        modalGaleria.classList.add("active");
      });
    });

    cerrarGaleria.addEventListener("click", () => {
      modalGaleria.classList.remove("active");
    });
  }