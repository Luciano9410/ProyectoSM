  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <ul>
        <li>
          <form action="" method="post" style="display:inline;">
            <input type="hidden" name="carpeta" value="kinesiologia">
            <button type="submit">Kinesiologia</button>
          </form>
        </li>
        <li>
          <form action="" method="post" style="display:inline;">
            <input type="hidden" name="carpeta" value="turnos">
            <button type="submit">Turnos</button>
          </form>   
        </li>
    </ul>
    <?php
    if (isset($_POST['carpeta'])) {
        $carpeta = $_POST['carpeta'];
        $baseDir = __DIR__ . '/';
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
    }
    ?>
    
  </body>
  </html>  