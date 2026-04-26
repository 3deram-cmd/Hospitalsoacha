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
  <link rel="stylesheet" href="home.css">
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
       <a href="#" class="nav-link">Inicio</a>


          <div class="dropdown">

            <div class="dropdown-img">
              <!--ESTA IMAGEN ES LA QUE ROTA -->
              <img id="img-inicio" src="images/persona1.jpg" alt="Inicio">
            </div>

            <div class="dropdown-links">
              <a href="index.html">Inicio</a>
              <a href="entidad.html">Entidad</a>
              <a href="historiaclinica.html">Historia clínica</a>
              <a href="radicacion.html">Radicación PQRS</a>
              <a href="docencia.html">Docencia</a>
              <a href="investigacion.html">Investigación</a>
            </div>

          </div>
        </div>

        <!-- INFORMACIÓN -->
        <div class="nav-item">
          <a href="#" class="nav-link">Informacion</a>

          <div class="dropdown">

            <div class="dropdown-img">
              <!--  TAMBIÉN PUEDE ROTAR -->
              <img id="img-info" src="images/persona1.jpg" alt="Información">
            </div>

            <div class="dropdown-links">
              <a href="MIPG.html">MIPG</a>
              <a href="humanizacion.html">Humanizacion</a>
              <a href="boletines.html">Boletines informativos</a>
              <a href="SIAU.html">Atencion al usuario</a>
            </div>

          </div>
        </div>

        <!-- LINKS NORMALES -->
        <a href="servicios.html">Servicios</a>
        <a href="atencion.html">Atención</a>

      </nav>
    </div>
  </div>

</header>

  <!-- =========================
        CONTENIDO PRINCIPAL
  ========================== -->
  
  <main>

    <section class="hero">
        

  <div class="hero-container">

<h2>SALUD MENTAL</h2>
    <div class="hero-text">
      <p>
        La salud mental es esencial para el bienestar de nuestra comunidad. 
        Desde la Empresa Social del Estado, la Región de Salud Soacha y el Hospital Mario Gaitán Yanguas,
        reafirmamos nuestro compromiso con una atención integral, humanizada y oportuna.
      </p>

      <p>
        Trabajamos para promover el cuidado emocional, prevenir riesgos y acompañar a cada persona en su proceso.
        Cuidar la salud mental es responsabilidad de todos.
      </p>
    </div>

    <!-- IMAGEN -->
    <div class="hero-img">
      <img src="images/salud-mental.jpg" alt="Salud mental">
    </div>

    
    
  </div>

      
      <section class="galeria">

  <div class="container">

    <div class="galeria-grid">

      <img src="images/img1.jpg" class="img-click" alt="">
      <img src="images/img2.jpg" class="img-click" alt="">
      <img src="images/img3.jpg" class="img-click" alt="">

    </div>

  </div>
<div class="galeria-dots">
  <span class="dot active"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>
</section>

<!-- MODAL -->
<!-- MODAL -->
<div class="modal" id="modal">
  <span class="cerrar">&times;</span>
  <img id="modal-img" src="images/img1.jpg" alt="">
</div>
      
</section>
<section class="info-section">

    <h2>INFORMACION INSTITUCIONAL</h2>

    <div class="info-grid">

        <!-- SLIDER 1 -->
        <div class="slider">

            <div class="slides">
                <img src="images/info1.jpg" class="active">
                <img src="images/info2.jpg">
                <img src="images/info03.jpg">
            </div>

            <div class="dots">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>

        </div>

        <!-- SLIDER 2 -->
        <div class="slider">

            <div class="slides">
                <img src="images/info2.jpg" class="active">
                <img src="images/info002.jpg">
                <img src="images/info003.jpg">
            </div>

            <div class="dots">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>

        </div>

    </div>

</section>
    
  
 <!-- =========================
     VIDEO INSTITUCIONAL NUMERO 1
========================= -->
<section class="home-video">

  <div class="container">

    <h3 class="home-video-title">VIDEO INSTITUCIONAL</h3>

    <div class="linea-azul small center"></div>

    <div class="home-video-container">
      <video controls>
        <source src="videos/hospital.mp4" type="video/mp4">
        Tu navegador no soporta el video.
      </video>
    </div>

  </div>

</section>   
    
    
    <!-- =========================
     VIDEO INSTITUCIONAL NUMERO 2
========================= -->
<section class="home-video">

  <div class="container">

    <h3 class="home-video-title">VIDEO INSTITUCIONAL</h3>

    <div class="linea-azul small center"></div>

    <div class="home-video-container">
      <video controls>
        <source src="videos/hospital.mp4" type="video/mp4">
        Tu navegador no soporta el video.
      </video>
    </div>

  </div>

</section>   
    
    
    
    
    
    
    
    
    
    
    
 <!-- =========================
   REFERENCIACION
========================= -->
    
   
    
    
<section class="hero">
  
   <div class="hero-container">
    <h2>REFERENCIATE CON NOSOTROS</h2>
  
  </div>
  <section class="referencia-section">

  

    <div class="referencia-container">

        <!-- TEXTO -->
        <div class="referencia-text">
            <p>
                Con el propósito de facilitar el proceso de referenciación comparativa,
                ponemos a disposición de las entidades externas el formulario oficial de solicitud.
            </p>

            <p>
                Las instituciones interesadas podrán enviar el formulario diligenciado a su solicitud
                a través del correo electrónico: referenteacreditacion@hmgy.gov.co
            </p>

            <p>A continuación, puede descargar el archivo.</p>

            <!-- CARD PDF -->
          <div class="pdf-container">

<?php

$carpeta = "pdfs/";
$archivo = "formato.pdf";

$ruta = $carpeta . $archivo;

if (file_exists($ruta)) {

    $peso = round(filesize($ruta) / (1024 * 1024), 2) . " MB";
    $fecha = date("d-m-Y", filemtime($ruta));
    $nombre = ucfirst(str_replace("_", " ", pathinfo($archivo, PATHINFO_FILENAME)));

?>

    <div class="pdf-box">

        <div class="pdf-info">
            <span class="pdf-icon">PDF</span>

            <div>
                <strong><?php echo $nombre; ?></strong>
                <p>Peso: <?php echo $peso; ?></p>
                <p>Actualizado: <?php echo $fecha; ?></p>
            </div>
        </div>

       <a href="descargar.php?file=formato.pdf" class="btn-download">
    Descargar prueba
</a>

    </div>

<?php

} else {

?>

    <div class="pdf-box">
        <p>No hay archivo disponible</p>
    </div>

<?php

}

?>

</div>
        </div>

        <!-- IMAGEN -->
        <div class="referencia-img">
            <img src="images/enfermera.jpg">
        </div>

    </div>
</section>
  </section>


<!-- =========================
   HORARIO
========================= -->
 <section class="hero">
    <div class="hero-container">
    <h2>HORARIO DE VISITAS</h2>
  
  </div>
    <section class="horario-section">


    <div class="horario-container">

        <!-- IMAGEN -->
        <div class="horario-img">
            <img src="images/enfermera.jpg">
        </div>

        <!-- TEXTO -->
        <div class="horario-text">

            <p>
                Con el fin de garantizar el bienestar de nuestros pacientes y el adecuado desarrollo
                de los procesos asistenciales, hemos establecido los siguientes horarios de visita:
            </p>

            <h4>Medicina Interna y Servicios Quirúrgicos</h4>
            <p>02:30 p.m. a 03:30 p.m.</p>

            <h4>Hospitalización y Ginecología</h4>
            <p>07:00 a.m. a 06:00 p.m.</p>

        </div>

    </div>
</section>
   
   
   </section>
    
   

 <section class="puestos-section">

  <h2>Nuestros puestos de salud</h2>

  <div class="puestos-grid">

    <!-- 1 -->
    <div class="puesto-card"
      data-nombre="Centro de salud de Sibate"
      data-direccion="Carrera 8 # 6-45"
      data-horario="24 horas"
      data-especialidades="Medicina, Urgencias, Vacunación,a,a,a,a,a,a,a,a,a,a,a,a">

      <img src="images/sibate.jpg" class="puesto-img">
      <h3>Centro de salud de Sibate</h3>
      <button class="btn-info">Información</button>
    </div>

    <!-- 2 -->
    <div class="puesto-card"
      data-nombre="Hospital Mario Gaitán Yanguas"
      data-direccion="Cra 13 no 10-85"
      data-horario="24 horas"
      data-especialidades="Urgencias, Hospitalización, Cirugía">

      <img src="images/hospital.jpg" class="puesto-img">
      <h3>Hospital Mario  Gaitan Yanguas</h3>
      <button class="btn-info">Información</button>
    </div>
     <!-- 3-->
    <div class="puesto-card"
      data-nombre="Puesto de salud Pablo Nerudas"
      data-direccion="Soacha centro"
      data-horario="24 horas"
      data-especialidades="Urgencias, Hospitalización, Cirugía">

      <img src="images/pablo.jpg" class="puesto-img">
      <h3>Puesto de salud Pablo Neruda</h3>
      <button class="btn-info">Información</button>
    </div>
    
    <!-- 4-->
    <div class="puesto-card"
      data-nombre="Puesto de salud Luis carlos Galan"
      data-direccion="Soacha centro"
      data-horario="24 horas"
      data-especialidades="Urgencias, Hospitalización, Cirugía">

      <img src="images/luis.jpg" class="puesto-img">
      <h3>Puesto de salud Luis carlos Galan</h3>
      <button class="btn-info">Información</button>
    </div>
    
    <!-- 5-->
    <div class="puesto-card"
      data-nombre="Puesto de salud Santillana"
      data-direccion="Soacha centro"
      data-horario="24 horas"
      data-especialidades="Urgencias, Hospitalización, Cirugía">

      <img src="images/santillana.jpg" class="puesto-img">
      <h3>Puesto de salud Santillana</h3>
      <button class="btn-info">Información</button>
    </div>
    
    <!-- 6-->
    <div class="puesto-card"
      data-nombre="Centro de consulta de granada"
      data-direccion="Soacha centro"
      data-horario="24 horas"
      data-especialidades="Urgencias, Hospitalización, Cirugía">

      <img src="images/granada.jpg" class="puesto-img">
      <h3>Centro de consulta de granada</h3>
      <button class="btn-info">Información</button>
    </div>
    
    <!-- 7-->
    <div class="puesto-card"
      data-nombre="Puesto de salud la despensa"
      data-direccion="Soacha centro"
      data-horario="24 horas"
      data-especialidades="Urgencias, Hospitalización, Cirugía">

      <img src="images/despensa.jpg" class="puesto-img">
      <h3>Puesto de salud la despensa</h3>
      <button class="btn-info">Información</button>
    </div>
    
    <!-- 8-->
    <div class="puesto-card"
      data-nombre="Centro de salud ciudad latina"
      data-direccion="Soacha centro"
      data-horario="24 horas"
      data-especialidades="Urgencias, Hospitalización, Cirugía">

      <img src="images/ciudad.jpg" class="puesto-img">
      <h3>Centro de salud ciudad latina</h3>
      <button class="btn-info">Información</button>
    </div>
    
    <!-- 9-->
    <div class="puesto-card"
      data-nombre="Centro de consulta externa"
      data-direccion="Soacha centro"
      data-horario="24 horas"
      data-especialidades="Urgencias, Hospitalización, Cirugía">

      <img src="images/externa.jpg" class="puesto-img">
      <h3>Centro de consulta externa</h3>
      <button class="btn-info">Información</button>
    </div>
    
        <!-- 10-->
    <div class="puesto-card"
      data-nombre="Sede parque"
      data-direccion="Soacha centro"
      data-horario="24 horas"
      data-especialidades="Urgencias, Hospitalización, Cirugía">

      <img src="images/parque.jpg" class="puesto-img">
      <h3>Sede parque</h3>
      <button class="btn-info">Información</button>
    </div>

  </div>

</section>

<!-- 🔥 MODAL -->
<div class="modal-puesto" id="modalPuesto">

  <div class="modal-content">

    <span class="cerrar-modal">&times;</span>

<img id="modal-img-puesto" src="images/placeholder.jpg" alt="Imagen del puesto">

    <h2 id="modal-nombre"></h2>

    <p><strong>Dirección:</strong> <span id="modal-direccion"></span></p>
    <p><strong>Horario:</strong> <span id="modal-horario"></span></p>

    <h4>Especialidades</h4>
    <div id="modal-especialidades"></div>

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
  <script src="main.js"></script>

</body>
</html>