<?php
if (isset($_POST['carpeta'])) {
    $carpeta = $_POST['carpeta'];
    // Seguridad: evitar rutas fuera del directorio permitido
    $baseDir = __DIR__ . '/Archivos';
    $ruta = realpath($baseDir . $carpeta);
    if ($ruta && strpos($ruta, $baseDir) === 0 && is_dir($ruta)) {
        echo "<h2>Contenido de la carpeta: $carpeta</h2>";
        echo "<ul>";
        foreach (scandir($ruta) as $archivo) {
            if ($archivo !== '.' && $archivo !== '..') {
                $fileUrl = $carpeta . '/' . urlencode($archivo);
                echo "<li><a href='$fileUrl' download>$archivo</a></li>";
            }
        }
        echo "</ul>";
    } else {
        echo "Carpeta no válida.";
    }
} else {
    echo "No se recibió ninguna carpeta.";
}
?>
