<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sanatorio San Marcos S.R.L</title>
  <link rel="stylesheet" href="../CSS/styles.css">
</head>
<body>
  <!--Logo flotante de whatsapp, solo hay que ponerle link cuando lo tengamos -->
  <div class="Fixed-box"><img src="../Logos/WhatsApp.svg" alt=""></div>

  <header class="site-header">
   
    <nav class="main-nav">
      <ul>
        <li><a href="#">Sanatorio</a></li>
        <li><a href="#">Pacientes</a></li>
        <li><a href="archivos.php">Archivos</a></li>
        <li><a href="#">?</a></li>     
      </ul>
    </nav>
  </header>

  <section class="hero">
    <h1>Te damos la bienvenida a Sanatorio San Marcos</h1>
    <p>Somos Sanatorio San Marcos, centro de salud privado y referencia sanvicentina. Hace más de 40 años ...</p>
    <div class="cta-buttons">
      <a href="#" class="btn primary">Quiero sacar un turno</a>
      <a href="Servicios.php" class="btn secondary">Servicios que ofrecemos</a>
    </div>
  </section>

  <section class="centers">
    <h2>Redes Sociales</h2>
    <div class="cards">
      <div class="card"><a href="#">Facebook</a></div>
      <div class="card"><a href="#">Instagram</a></div>
    </div>
  </section>

  <section class="stories">
    <h2>Mi historia</h2>
    <ul>
      <li><a href="#">"La salud es historia y nosotros tenemos mucho que contar"</a></li>

    </ul>
  </section>

  <footer class="site-footer">
    <div class="footer-section">
      <h3>Direcciones</h3>
      <p>Av. Constitucion 289, San Vicente, Misiones</p>
 
    </div>
    <div class="footer-section">
      <h3>Contactos</h3>
      <a href="#">?</a><br>

    </div>
    <div class="footer-section social">
      <a href="#">Facebook</a>
      <a href="#">Instagram</a>
      <a href="#">Whatsapp</a>

    </div>
    <div class="footer-section legal">
      <a href="#">Política de privacidad</a>
      <a href="#">Términos y condiciones</a>
    </div>
  </footer>


  


  <script>
  // Detecta si estamos en "servicios.php"
  const path = window.location.pathname;
  const nombreArchivo = path.substring(path.lastIndexOf('/') + 1);

  if (nombreArchivo === '' || nombreArchivo === 'index.php') {
    document.getElementById("link-inicio").style.display = "none";
  }
</script>

</body>
</html>
