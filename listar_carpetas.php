<?php
// Devuelve un array JSON con los nombres de las carpetas en el directorio actual
$baseDir = __DIR__;
$carpetas = [];
foreach (scandir($baseDir) as $archivo) {
    if ($archivo !== '.' && $archivo !== '..' && is_dir($baseDir . '/' . $archivo)) {
        $carpetas[] = $archivo;
    }
}
header('Content-Type: application/json');
echo json_encode($carpetas);
