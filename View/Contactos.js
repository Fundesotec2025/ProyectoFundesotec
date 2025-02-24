document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("btnEnviarMensaje").addEventListener("click", function (event) {
    event.preventDefault(); // Evita recargar la página

    let nombreCompleto = document.getElementById("txtnombreCompleto").value.trim();
    let correo = document.getElementById("txtCorreo").value.trim();
    let asunto = document.getElementById("txtAsunto").value.trim();
    let mensaje = document.getElementById("txtMensaje").value.trim();

    // Validación básica en el frontend
    if (!nombreCompleto || !correo || !asunto || !mensaje) {
      alert("Todos los campos son obligatorios.");
      return;
    }

    // Validación de correo
    if (!/\S+@\S+\.\S+/.test(correo)) {
      alert("Ingrese un correo electrónico válido.");
      return;
    }

    let formData = new FormData();
    formData.append("nombreCompleto", nombreCompleto);
    formData.append("correo", correo);
    formData.append("asunto", asunto);
    formData.append("mensaje", mensaje);

    fetch("controlador/ContactosControlador.php", {
      method: "POST",
      body: formData
    })
      .then(response => response.json())
      .then(data => {
        console.log(data);
        if (data.success) {
          alert("Mensaje enviado correctamente.");
          document.querySelector(".FormContactos").reset();
        } else {
          alert("Error al enviar el mensaje: " + (data.error || "Intente nuevamente."));
        }
      })
      .catch(error => {
        console.error("Error en la solicitud:", error);
        alert("Hubo un problema con la conexión.");
      });
  });
});
