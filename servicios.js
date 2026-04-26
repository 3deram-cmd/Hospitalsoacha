// ==========================
// SERVICIOS
// ==========================
document.addEventListener("click", function(e){

  const btn = e.target.closest(".btn-toggle");
  if(!btn) return;

  const card = btn.closest(".card");

  const url = btn.dataset.url;
  if(url){
    window.location.href = url;
    return;
  }

  const lista = card.querySelector(".lista-larga");
  if(!lista) return;

  const isOpen = lista.classList.contains("activo");

  document.querySelectorAll(".lista-larga").forEach(l => {
    l.classList.remove("activo");
    l.style.maxHeight = null;
  });

  document.querySelectorAll(".btn-toggle").forEach(b => {
    if(!b.dataset.url) b.textContent = "Ver más";
  });

  if(!isOpen){
    lista.classList.add("activo");
    lista.style.maxHeight = lista.scrollHeight + "px";
    btn.textContent = "Ver menos";
  }

});
