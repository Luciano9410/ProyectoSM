<?php
$targetDir = "uploads/";
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}
$targetFile = $targetDir . basename($_FILES["archivo"]["name"]);
if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $targetFile)) {
    echo "El archivo se subió correctamente.";
} else {
    echo "Error al subir el archivo.";
}
?>