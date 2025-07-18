
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descarga de Archivos PDF</title>
    <link rel="stylesheet" href="/CSS/stileArchivos.css">
</head>
<body>
    <!-- Icono de WhatsApp -->
    <div class="Fixed-box"><img src="/Logos/WhatsApp.svg" alt=""></div>

    <!-- Barra de navegación -->
    <nav class="navbar">
        <!-- Botón Hamburguesa, para abrir el menú lateral -->
        <button id="abrirMenu">
           <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M120-240v-80h720v80H120zm0-200v-80h720v80H120zm0-200v-80h720v80H120z"/></svg>
        </button> 
       
        <header>
          <a href="/HTM-LPHP/index.php"><img src="/Logos/Logo.png" alt="Logo" class="imgLogo"></a> 
        </header>       
    </nav>
    
    <div class ="hero">
        <!-- Menú lateral, utiliza script para abrir y cerrar -->
        <nav class="sidebar" id="sidebar">
              <div class="links-container">
                 <div class="divcerrar">
                      <button id="cerrarMenu">
                           <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M256-200l-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224z"/></svg>
                      </button>   
                 </div>
               <div class="opciones">
                   <ul id="carpetas-list">
                       <!-- Las carpetas se agregarán aquí con JavaScript -->
                          <?php
                                     $directorio = '../Archivos';
                                     $carpetas = array_filter(glob($directorio . '/*'), 'is_dir');
                                     foreach ($carpetas as $carpeta) {
                                       $nombre = basename($carpeta);
                                     echo "<li><a href='#'  class='carpeta' data-folder='$nombre'>$nombre</a></li>";
                                       }
                            ?>
                   </ul>
               </div>
              </div>               
        </nav>

<!-- Contenido principal, se listan los elementos obtenidos de las carpetas (por medio de javascript utilizando listar_pdfs) -->
         <div class="contenedor" id="contenedor">
               
                <ul id="lista-archivos"></ul>
                             
         </div>
    </div> 
       
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

    <!-- Script para abrir y cerrar el menú lateral-->
    <script>
    document.getElementById("abrirMenu").addEventListener("click", function() {
  const div = document.getElementById("sidebar");
  const content = document.getElementById("content");
  const isHidden = window.getComputedStyle(div).display === "none";

  if (isHidden) {
    div.style.display = "flex";
    content.style.width = "calc(100% - 200px)"; // Ajusta el ancho del contenido principal
  } else {
    div.style.display = "none";
    content.style.width = "100%"; // Ajusta el ancho del contenido principal
  }
});
  document.getElementById("cerrarMenu").addEventListener("click", function() {
  const div = document.getElementById("sidebar");
  const content = document.getElementById("content");
  if (div.style.display === "none") {
    div.style.display = "flex";
     content.style.width = "calc(100% - 200px)";  // Ajusta el ancho del contenido principal
  } else {
    div.style.display = "none";
    content.style.width = "100%";  // Ajusta el ancho del contenido principal
  }
});

/*llama a php sin recargar la página*/
document.querySelectorAll('.carpeta').forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault();
    const carpeta = e.target.dataset.folder;

    fetch(`listar_pdfs.php?folder=${encodeURIComponent(carpeta)}`)
      .then(res => res.text())
      .then(html => {
        document.getElementById('lista-archivos').innerHTML = html;
      });
  });
});

</script>
   
</body>
</html>