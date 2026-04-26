<?php

if (!isset($_GET['file'])) {
    die("Archivo no definido");
}

$archivo = basename($_GET['file']);
$ruta = "pdfs/" . $archivo;

if (!file_exists($ruta)) {
    die("Archivo no encontrado");
}

if (pathinfo($ruta, PATHINFO_EXTENSION) !== "pdf") {
    die("Archivo no permitido");
}

header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $archivo . '"');
header('Content-Length: ' . filesize($ruta));

readfile($ruta);
exit;