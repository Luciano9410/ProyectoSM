<?php
$base = '../Archivos';
$carpeta = $_GET['folder'] ?? '';
$ruta = realpath($base.'/'.$carpeta);

if ($ruta && strpos($ruta, realpath($base)) === 0) {
  $archivos = glob("$ruta/*.pdf");
  foreach ($archivos as $archivo) {
    $nombre = basename($archivo);
    $url = $base.'/'.$carpeta.'/'.$nombre; // o usar una ruta relativa si accedes desde navegador
    echo "<li><a href='$url' target='_blank' >$nombre</a></li>";
  }
} else {
  echo "<li>No se pudo acceder a la carpeta</li>";
}
?>
