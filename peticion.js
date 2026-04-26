const radios = document.querySelectorAll('input[name="tipo"]');
const datosSolicitante = document.querySelector('.peticion-datos');
const mediosRespuesta = document.querySelectorAll('.medio-respuesta input');

radios.forEach(radio => {
  radio.addEventListener('change', () => {

    if (radio.value === "anonimo" && radio.checked) {

      // Oculta datos personales
      datosSolicitante.style.display = "none";

      // Desactiva medios excepto ticket
      mediosRespuesta.forEach(m => {
        if (m.value !== "ticket") {
          m.checked = false;
          m.disabled = true;
        } else {
          m.disabled = false;
          m.checked = true;
        }
      });

    } else {

      // Muestra datos personales
      datosSolicitante.style.display = "block";

      // Reactiva todos
      mediosRespuesta.forEach(m => {
        m.disabled = false;
      });

    }

  });
});