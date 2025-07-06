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
        <ul id="carpetas-list">
          <!-- Las carpetas se agregarán aquí con JavaScript -->
        </ul>
      </div>
      <div class="contenido" style="flex:1; padding: 32px;" id="contenido">
        <ul id="contenido-list"></ul>
      </div>
    </div>
    <script>
    // Solicita las carpetas al backend y las agrega a la lista solo una vez
    fetch('listar_carpetas.php')
      .then(response => response.json())
      .then(data => {
        const ul = document.getElementById('carpetas-list');
        data.forEach(nombre => {
          const li = document.createElement('li');
          li.className = 'item2';
          li.innerHTML = `
            <button type=\"button\">${nombre.charAt(0).toUpperCase() + nombre.slice(1)}</button>
          `;
          li.querySelector('button').addEventListener('click', function() {
            cargarContenido(nombre);
          });
          ul.appendChild(li);
        });
      });

    function cargarContenido(nombreCarpeta) {
      // Intenta usar cache local primero
      const cacheKey = 'contenido_' + nombreCarpeta;
      const cacheData = sessionStorage.getItem(cacheKey);
      if (cacheData) {
        renderContenido(JSON.parse(cacheData), nombreCarpeta);
        return;
      }
      fetch('procesar.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'carpeta=' + encodeURIComponent(nombreCarpeta)
      })
      .then(response => response.json())
      .then(archivos => {
        sessionStorage.setItem(cacheKey, JSON.stringify(archivos));
        renderContenido(archivos, nombreCarpeta);
      });
    }

    function renderContenido(archivos, nombreCarpeta) {
      const ul = document.getElementById('contenido-list');
      ul.innerHTML = '';
      if (Array.isArray(archivos) && archivos.length > 0) {
        archivos.forEach(archivo => {
          const li = document.createElement('li');
          const link = document.createElement('a');
          link.href = `Archivos/${encodeURIComponent(nombreCarpeta)}/${encodeURIComponent(archivo)}`;
          link.download = archivo;
          link.textContent = archivo;
          li.appendChild(link);
          ul.appendChild(li);
        });
      } else {
        ul.innerHTML = '<li>No hay archivos en esta carpeta.</li>';
      }
    }
    // Si quieres cargar una carpeta por defecto al abrir la página, descomenta la siguiente línea:
    // cargarContenido('NOMBRE_CARPETA');
    </script>
  </body>
  </html>