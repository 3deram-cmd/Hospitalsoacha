// =========================
  // GALERIA DOTS SCROLL
  // =========================
  const galeria = document.querySelector('.galeria-grid');
  const dotsGaleria = document.querySelectorAll('.galeria-dots .dot');

  if (galeria && dotsGaleria.length) {
    galeria.addEventListener('scroll', () => {
      const cardWidth = galeria.querySelector('.img-click').offsetWidth + 15;
      const index = Math.round(galeria.scrollLeft / cardWidth);

      dotsGaleria.forEach(d => d.classList.remove('active'));
      if (dotsGaleria[index]) {
        dotsGaleria[index].classList.add('active');
      }
    });
  }