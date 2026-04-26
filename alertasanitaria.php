<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Soacha</title>

  <!-- CSS (ORDEN IMPORTANTE) -->
  <link rel="stylesheet" href="global.css">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="alertasanitaria.css">
  <link rel="stylesheet" href="responsive.css">
</head>

<body>

     <div class="menu-overlay" id="menu-overlay"></div>
  <!-- =========================
        HEADER / NAVBAR
  ========================== -->
 <header class="header">

  <!-- =========================
       TOPBAR
  ========================== -->
   <div class="govbar">
  <div class="container govbar-container">
    
    <div class="govbar-left">
      <img src="images/logogov.jpg" alt="gov.co" class="gov-logo">
    </div>

  </div>
</div>
  <div class="topbar">
    <div class="container topbar-container">
       

      
      
      <div class="topbar-left">
        <img src="images/logo.png" alt="Logo" class="logo-img">

        <div>
          <h1>Empresa Social del Estado</h1>
          <span>Región de Salud Soacha</span>
        </div>
      </div>

      <div class="topbar-right">
        <img src="images/logo-alcaldia.png" alt="Logo derecho">
      </div>

    </div>
  </div>

  <!-- =========================
       NAVBAR
  ========================== -->
   <div class="navbar">
    <div class="container">

      <!-- HAMBURGUESA -->
      <div class="menu-toggle" id="menu-toggle">☰</div>

      <!-- NAV -->
      <nav class="nav" id="nav">

        <!-- INICIO -->
        <div class="nav-item">
       <a href="indexintranet.html" class="nav-link">Inicio</a>

        </div>

        <!-- INFORMACIÓN -->
        <div class="nav-item">
          <a href="mapadeprocesos.html" class="nav-link">Mapa de Procesos</a>

          
        </div>

        <!-- LINKS NORMALES -->
        <a href="">Macrocomités</a>
        <a href="">Direccionamiento estrategico</a>
        <a href="comunicados.html">Comunicados</a>
        <a href="">Control Interno</a>
        <a href="indicadoresintranet.html">Indicadores</a>

      </nav>
    </div>
  </div>

</header>

  <!-- =========================
        CONTENIDO PRINCIPAL
  ========================== -->
 <main>

<?php

// 🔥 RUTA BASE PARA NAVEGACIÓN
$rutaBase = "ALERTAS SANITARIAS";
$ruta = isset($_GET['ruta']) ? $_GET['ruta'] : $rutaBase;

// 🔒 seguridad
if (strpos($ruta, $rutaBase) !== 0) {
  $ruta = $rutaBase;
}

// 🔥 FUNCIÓN MEJORADA
function listarContenido($ruta, $filtro = "", $mostrarCarpetas = true) {

  if (!is_dir($ruta)) {
    echo "<p>No se encontró la carpeta: $ruta</p>";
    return;
  }

  $elementos = scandir($ruta);

  $carpetas = [];
  $archivos = [];

  foreach ($elementos as $item) {

    if ($item != "." && $item != "..") {

      $rutaCompleta = $ruta . "/" . $item;

      if (is_dir($rutaCompleta)) {
        $carpetas[] = $item;
      } else {

        if ($filtro == "" || stripos($item, $filtro) !== false) {
          $archivos[] = $item;
        }
      }
    }
  }

  sort($carpetas);
  sort($archivos);

  // =========================
  // 📁 CARPETAS (solo si aplica)
  // =========================
  if ($mostrarCarpetas) {
    foreach ($carpetas as $item) {
      echo "<div>";
      echo "<a href='?ruta=$ruta/$item' class='btn-descargar'>📁 $item</a>";
      echo "</div>";
    }

    if (!empty($carpetas)) echo "<hr>";
  }

  // =========================
  // 📄 ARCHIVOS
  // =========================
  if (empty($archivos)) {
    echo "<p>No hay archivos</p>";
  }

  foreach ($archivos as $item) {
    $url = rawurlencode($item);
    $url = str_replace("%2F", "/", $url);

    echo "<div>";
    echo "<a href='$ruta/$url' target='_blank' class='btn-descargar'>📄 $item</a>";
    echo "</div>";
  }
}
?>

<div class="accordion">

  <!-- 🔵 REACTIVOVIGILANCIA (SIN CARPETAS) -->
  <div class="accordion-item">
    <button class="accordion-header">
      REACTIVOVIGILANCIA <span class="icon">+</span>
    </button>
    <div class="accordion-content">
      <?php listarContenido("ALERTAS SANITARIAS", "363-2024", false); ?>
    </div>
  </div>

  <!-- 🔵 HEMOVIGILANCIA (SIN CARPETAS) -->
  <div class="accordion-item">
    <button class="accordion-header">
      HEMOVIGILANCIA <span class="icon">+</span>
    </button>
    <div class="accordion-content">
      <?php listarContenido("ALERTAS SANITARIAS", "364-2024", false); ?>
    </div>
  </div>

  <!-- 🟢 FARMACOVIGILANCIA (CON NAVEGACIÓN) -->
  <div class="accordion-item">
    <button class="accordion-header">
      FARMACOVIGILANCIA <span class="icon">+</span>
    </button>
    <div class="accordion-content">

      <?php
      $rutaFarmaco = (isset($_GET['ruta']) && strpos($_GET['ruta'], "ConteFarmacoVigilancia") !== false)
        ? $_GET['ruta']
        : "ALERTAS SANITARIAS/ConteFarmacoVigilancia";

      if ($rutaFarmaco != "ALERTAS SANITARIAS/ConteFarmacoVigilancia") {
        echo "<a href='?ruta=ALERTAS SANITARIAS/ConteFarmacoVigilancia' class='btn-descargar'>⬅ Volver</a><br><br>";
      }

      listarContenido($rutaFarmaco);
      ?>

    </div>
  </div>

  <!-- 🟢 DESABASTECIDOS (CON NAVEGACIÓN) -->
  <div class="accordion-item">
    <button class="accordion-header">
      MEDICAMENTOS_E_INSUMOS_DESABASTECIDOS <span class="icon">+</span>
    </button>
    <div class="accordion-content">

      <?php
      $rutaDesab = (isset($_GET['ruta']) && strpos($_GET['ruta'], "MEDICAMENTOS_E_INSUMOS_DESABASTECIDOS") !== false)
        ? $_GET['ruta']
        : "ALERTAS SANITARIAS/MEDICAMENTOS_E_INSUMOS_DESABASTECIDOS";

      if ($rutaDesab != "ALERTAS SANITARIAS/MEDICAMENTOS_E_INSUMOS_DESABASTECIDOS") {
        echo "<a href='?ruta=ALERTAS SANITARIAS/MEDICAMENTOS_E_INSUMOS_DESABASTECIDOS' class='btn-descargar'>⬅ Volver</a><br><br>";
      }

      listarContenido($rutaDesab);
      ?>

    </div>
  </div>

</div>

</main>
  <!-- =========================
        FOOTER
  ========================== -->
  
<!-- =========================
     LOGOS INSTITUCIONALES
========================= -->
<section class="logos-section">

  <div class="container logos-container">
    <img src="images/logo1.png" alt="">
    <img src="images/logo2.png" alt="">
    <img src="images/logo3.png" alt="">
    <img src="images/logo4.png" alt="">
    <img src="images/logo5.png" alt="">
  </div>

</section>

<!-- =========================
     LÍNEA ROJA
========================= -->
<div class="divider-red"></div>

<!-- =========================
     FOOTER
========================= -->
<footer class="footer">

  <div class="footer-container container">

    <!-- CONTACTO -->
    <div class="footer-col">
      <h3>Datos de Contacto</h3>
      <p>Dirección Sede Asistencial: Calle 13 No. 10 - 60 Soacha Cundinamarca.</p>
      <p>Dirección Sede Administrativa: Calle 13 No. 9-97 Soacha Cundinamarca.</p>
      <p>Teléfono: +57 (601) 730 92 30</p>
      <p>Email: atencionalusuario@hmgy.gov.co</p>
      <p>Notificaciones judiciales: notificacionesjudiciales@hmgy.gov.co</p>
      <p>Política de Tratamiento de datos Personales | Términos y Condiciones</p>
      <p>©2020 Copyright Hospital Mario Gaitan Yanguas de SoachaTodos los derechos reservados</p>
    </div>

    <!-- REDES -->
    <div class="footer-col center">

  <h3>Redes sociales</h3>

  <!-- ICONOS -->
  <div class="social">
    <img src="images/instagram.png">
    <img src="images/facebook.png">
    <img src="images/twitter.png">
    <img src="images/youtube.png">
  </div>

  <!-- LOGO PRINCIPAL -->
  <div class="footer-main-logo">
    <img src="images/logo.png" alt="">
  </div>

  <!-- TEXTO -->
  <p class="footer-text">
    Empresa Social del Estado<br>
    Región de Salud Soacha
  </p>

  <!-- LOGOS INSTITUCIONALES -->
  <div class="footer-logos-small">
    <img src="images/govco.png">
    <img src="images/logo-alcaldia.png">
  </div>

</div>

  </div>

</footer>

   <!-- =========================
        JS
  ========================== -->
<script src="servicios.js"></script>
<script src="tarjetas.js"></script>
<script src="main.js"></script>
<script src="slider.js"></script>
<script src="sliders.js"></script>
<script src="puntos.js"></script>
<script src="galeriamodal.js"></script>
<script src="puestos.js"></script>
<script src="menuhamburgesa.js"></script>
  <script src="mipres.js"></script>
  
  
  <script>
document.addEventListener("click", function(e){

  const header = e.target.closest(".card-header");
  if(!header) return;

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

  // abrir solo el actual
  if(!isOpen){
    content.classList.add("active");
    if(icon) icon.textContent = "−";
  }

});
</script>
  
   <script src="documentover.js"></script>
</body>
</html>