  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="serviciosstyle.css">
  </head>
  <body>
    <header>
      <div class="item1"><a href="#">menu</a></div>
      <ul class="barraMenu">
        <li class="item"><a href="#">Volver a inicio</a></li>
        <li class="item"><a href="#">Servicios</a></li>
      </ul>
    </header>
  
    <div style="display: flex;">
      <div class="sidebar">
        <ul>
          <li class="item2">
            <form action="" method="post" style="display:inline;">
              <input type="hidden" name="carpeta" value="kinesiologia">
              <button type="submit">Kinesiologia</button>
            </form>
          </li>
          <li class="item2">
            <form action="" method="post" style="display:inline;">
              <input type="hidden" name="carpeta" value="turnos">
              <button type="submit">Turnos</button>
            </form>   
          </li>
        </ul>
      </div>
      <div class="contenido" style="flex:1; padding: 32px;">
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
      </div>
    </div>
    
  </body>
  </html>  