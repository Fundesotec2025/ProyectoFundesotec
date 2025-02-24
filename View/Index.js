
function cargarContenido(url) {
    fetch(url)
      .then(response => response.text())
      .then(html => {
        const contenedor = document.getElementById('contenido');
        contenedor.innerHTML = html;
        // Buscar y ejecutar los scripts del contenido insertado:
        const scripts = contenedor.querySelectorAll("script");
        scripts.forEach(oldScript => {
          const newScript = document.createElement("script");
          if (oldScript.src) {
            newScript.src = oldScript.src;
            // Opcional: copiar atributos como integrity, crossorigin, etc.
          } else {
            newScript.textContent = oldScript.textContent;
          }
          document.body.appendChild(newScript);
        });
      })
      .catch(error => console.error(error));
}
