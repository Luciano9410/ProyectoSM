<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/servicios.css">
    <title>Document</title>
</head>
<body>
     <header class="site-header-servicios">
   
    <nav class="main-nav">
      <ul>
        <li><a href="index.html">INICIO</a></li>
        <li><a href="#" class="Servicios" id="link-servicios">SERVICIOS</a></li>
        <li><a href="#">TURNOS/CONSULTAS</a></li>
        <li><a href="#">INTERNACION</a></li>    
        <li><a href="#">CONSULTORIOS</a></li>     
        
      </ul>
    </nav>
    <div class="header-content">
    
  <section class="left-side">

  <p>OPCIONES</p>
  <br>
  <p>ahora que lo pienso...no puedo usar <code>navs</code> y <code>a href</code> para conseguir mostrar la info de cada seccion...esto debera hacerse con js casi seguro</p>

  </section>
    
    <h1>Servicios que le ofrecemos</h1>

    
  </header>

</div>









     <script>
  // Detecta si estamos en "servicios.php"
  const path = window.location.pathname;
  const nombreArchivo = path.substring(path.lastIndexOf('/') + 1);

  if (nombreArchivo === '' || nombreArchivo === 'Servicios.php') {
    document.getElementById("link-servicios").style.display = "none";
  }
</script>

</body>
</html>