<?php
if (isset($_POST['carpeta'])) {
    $carpeta = $_POST['carpeta'];
    $baseDir = __DIR__ . '/Archivos';
    $ruta = realpath($baseDir . '/' . $carpeta);
    $archivos = [];
    if ($ruta && strpos($ruta, $baseDir) === 0 && is_dir($ruta)) {
        foreach (scandir($ruta) as $archivo) {
            if ($archivo !== '.' && $archivo !== '..' && is_file($ruta . '/' . $archivo)) {
                $archivos[] = $archivo;
            }
        }
    }
    header('Content-Type: application/json');
    echo json_encode($archivos);
    exit;
}
header('Content-Type: application/json');
echo json_encode([]);
?>
