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
        <li><a href="index.php">INICIO</a></li>
        <li><a href="#" class="Servicios" id="link-servicios">SERVICIOS</a></li>
        <li><a href="#">TURNOS/CONSULTAS</a></li>
        <li><a href="#">INTERNACION</a></li>    
        <li><a href="#">CONSULTORIOS</a></li>     
        
      </ul>
     </nav>


 <div class="header-content">
  <section class="left-side">
   <p>OPCIONES</p><br>
   

  <div class="options">
    
      
      <button onclick="boton_servicios('gastroenterologia')">Gastroenterología</button>
      <button onclick="boton_servicios('psicología')">Psicología</button>
      <button onclick="boton_servicios('medicina_clinica')">Medicina Clinica</button>
      <button onclick="boton_servicios('medicina_respiratoria')">Medicina respiratoria</button>
      <button onclick="boton_servicios('psicologia')">Psicologia</button>
      <button onclick="boton_servicios('fonoaudiologia')">Fonoaudiología</button>
      <button onclick="boton_servicios('nutricion')">Nutrición</button>
      <button onclick="boton_servicios('traumatologia')">Traumatología</button>
      <button onclick="boton_servicios('alergista')">Alergistas</button>
      <button onclick="boton_servicios('cardiologia')">Cardiología</button>
      <button onclick="boton_servicios('dermatologia')">Dermatología</button>
      <button onclick="boton_servicios('otorrinolaringologia')">Otorrinolaringología</button>
      <button onclick="boton_servicios('diabetologia')">Diabetología</button>
      <button onclick="boton_servicios('neurologia')">Neurología</button>
      <button onclick="boton_servicios('flebologia')">Flebolología</button>
      <button onclick="boton_servicios('psicopedagogia')">Psicopedagogía</button>
      <button onclick="boton_servicios('cirujanos')">Cirujanos</button>
      <button onclick="boton_servicios('endocrinologia')">Endocrinología</button>
      <button onclick="boton_servicios('urologia')">Urología</button>
      <button onclick="boton_servicios('pediatria')">Pediatría</button>
      <button onclick="boton_servicios('consultas')">Estudios y prácticas: Consultas, seguimiento profesional</button>
      <button onclick="boton_servicios('radiologia')">Radiología</button>
      <button onclick="boton_servicios('laboratorio')">Laboratorio de análisis clínicos</button>
      <button onclick="boton_servicios('guardia_activa')">Guardia médica activa</button>
      <button onclick="boton_servicios('guardia_pasiva')">Guardia médica pasiva</button>



  </div>
  </section >
    


  <div id="info_area">
  <h1>Servicios que le ofrecemos</h1>

  </div>
  

    
  </div>
</header>








<script >
  // Detecta si estamos en "servicios.php"
  const path = window.location.pathname;
  const nombreArchivo = path.substring(path.lastIndexOf('/') + 1);

  if (nombreArchivo === '' || nombreArchivo === 'Servicios.php') {
    document.getElementById("link-servicios").style.display = "none";
  }
</script>


<script src="../JS/Servicios.js">
  //Se carga el archivo que cambia la vista por boton pulsado
</script>

</body>
</html>