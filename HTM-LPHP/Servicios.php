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

  <div class="options">
  <ol>
      <li>Medicina Clinica</li>
      <li>Medicina respiratoria</li>
      <li>Gastroenterología</li>
      <li>Psicología</li>
      <li>Fonoaudiología</li>
      <li>Nutrición</li>
      <li>Traumatología</li>
      <li>Alergistas</li>
      <li>Cardiología</li>
      <li>Dermatología</li>
      <li>Otorrinolaringología</li>
      <li>Diabetología</li>
      <li>Neurología</li>
      <li>Flebolología</li>
      <li>Psicopedagogía</li>
      <li>Cirujanos</li>
      <li>Endocrinologia</li>
      <li>Uologia</li>
      <li>Pediatria</li>
      <li>Estudios y prácticas: Consultas, seguimiento profesional</li>
      <li>Radiología</li>
      <li>Laboratorio de analisis clinicos</li>
      <li>Guardia médica activa</li>
      <li>Guardia medica pasiva</li>
   </ol>
  </div>


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