// =========================
  // SLIDER
  // =========================
  document.querySelectorAll('.slider').forEach(slider => {

    const images = slider.querySelectorAll('.slides img');
    const dots = slider.querySelectorAll('.dot');

    let index = 0;

    function showSlide(i){
      images.forEach(img => img.classList.remove('active'));
      dots.forEach(dot => dot.classList.remove('active'));

      images[i].classList.add('active');
      dots[i].classList.add('active');
    }

    setInterval(() => {
      index = (index + 1) % images.length;
      showSlide(index);
    }, 5000);

    dots.forEach((dot, i) => {
      dot.addEventListener('click', () => showSlide(i));
    });

  });
