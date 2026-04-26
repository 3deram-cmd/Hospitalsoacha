document.addEventListener("DOMContentLoaded", () => {

  const botones = document.querySelectorAll(".btn-info");
  const modal = document.getElementById("modalPuesto");

  const nombre = document.getElementById("modal-nombre");
  const direccion = document.getElementById("modal-direccion");
  const horario = document.getElementById("modal-horario");
  const especialidades = document.getElementById("modal-especialidades");
  const imagen = document.getElementById("modal-img-puesto");

  const cerrar = document.querySelector(".cerrar-modal");

  botones.forEach(btn => {
    btn.addEventListener("click", () => {

      const card = btn.closest(".puesto-card");

      // 🔥 DATOS
      nombre.textContent = card.dataset.nombre;
      direccion.textContent = card.dataset.direccion;
      horario.textContent = card.dataset.horario;

      // 🔥 IMAGEN
      imagen.src = card.querySelector("img").src;

      // 🔥 ESPECIALIDADES
      especialidades.innerHTML = "";

      // limpiar clases previas
      especialidades.classList.remove("grid");

      const lista = card.dataset.especialidades.split(",");

      lista.forEach(e => {
        const p = document.createElement("p");
        p.textContent = e.trim();
        especialidades.appendChild(p);
      });

      // 🔥 ACTIVAR GRID SI HAY MUCHAS
      if (lista.length > 6) {
        especialidades.classList.add("grid");
      }

      // 🔥 (OPCIONAL PRO) 3 COLUMNAS SI SON MUCHÍSIMAS
      if (lista.length > 12) {
        especialidades.style.gridTemplateColumns = "repeat(3, 1fr)";
      } else {
        especialidades.style.gridTemplateColumns = "";
      }

      // 🔥 ABRIR MODAL
      modal.classList.add("active");
    });
  });

  // 🔥 CERRAR CON X
  cerrar.addEventListener("click", () => {
    modal.classList.remove("active");
  });

  // 🔥 CERRAR AL HACER CLICK FUERA
  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      modal.classList.remove("active");
    }
  });

});