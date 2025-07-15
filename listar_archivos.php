<?php
$directorioBase = './Archivos';
$carpetaSeleccionada = $_GET['folder'] ?? '';
$rutaCarpeta = realpath($directorioBase . '/' . $carpetaSeleccionada);

if ($rutaCarpeta && strpos($rutaCarpeta, realpath($directorioBase)) === 0) {
  $archivos = array_filter(glob($rutaCarpeta . '/*'), 'is_file');
  echo "<h2>Archivos en '$carpetaSeleccionada':</h2><ul>";
  foreach ($archivos as $archivo) {
    $nombre = basename($archivo);
    echo "<li><a href='$rutaCarpeta/$nombre' download>$nombre</a></li>";
  }
  echo "</ul>";
} else {
  echo "<p>Carpeta no válida.</p>";
}
?>
