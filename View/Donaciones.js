document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector(".formDonaciones");
  const btnCodigoQR = document.getElementById('btnQr');
  const btnEnviar = document.getElementById("btnEnviarDonacion");

  ocultarQR();

  btnCodigoQR.addEventListener('click', toggleQR);

  form.addEventListener("submit", async function (e) {
    e.preventDefault();

    // Asignar atributos name si no existen
    asignarNames();

    // Obtener valores del formulario
    const nombre = document.getElementById("txtNombre").value.trim();
    const apellido = document.getElementById("txtApellido").value.trim();
    const monto = document.getElementById("txtMonto").value.trim();
    const correo = document.getElementById("txtCorreoElectronico").value.trim();
    const confirmarCorreo = document.getElementById("txtCorreoConfirmar").value.trim();
    const metodoPago = document.getElementById("txtMetodoPago").value;

    // Validaciones básicas
    if (!nombre || !apellido || !monto || !correo || !metodoPago) {
      alert("Por favor, completa todos los campos obligatorios.");
      return;
    }

    if (correo !== confirmarCorreo) {
      alert("Los correos electrónicos no coinciden.");
      return;
    }

    btnEnviar.innerText = "Enviando...";

    try {
      await guardarRegistroDonaciones({ nombre, apellido, monto, correo, metodoPago });
      alert("¡Éxito! La información se ha enviado correctamente.");
      form.reset();
    } catch (err) {
      alert("Hubo un error en el proceso: " + err);
    } finally {
      btnEnviar.innerText = "Enviar Donación";
    }
  });
});

function asignarNames() {
  document.getElementById("txtNombre").setAttribute("name", "nombre");
  document.getElementById("txtApellido").setAttribute("name", "apellido");
  document.getElementById("txtMonto").setAttribute("name", "monto");
  document.getElementById("txtCorreoElectronico").setAttribute("name", "correoElectronico");
  document.getElementById("txtMetodoPago").setAttribute("name", "metodoPago");
}

function guardarRegistroDonaciones(datos) {
  return new Promise((resolve, reject) => {
    const formData = new FormData();
    formData.append('nombre', datos.nombre);
    formData.append('apellido', datos.apellido);
    formData.append('monto', datos.monto);
    formData.append('correoElectronico', datos.correo);
    formData.append('metodoPago', datos.metodoPago);

    fetch('controlador/DonacionesControlador.php', {
      method: 'POST',
      body: formData
    })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          resolve();
        } else {
          reject(data.message || 'Hubo un error al procesar la donación');
        }
      })
      .catch(error => {
        console.error('Error:', error);
        reject('Hubo un error en el proceso');
      });
  });
}

function ocultarQR() {
  $('#CodigoQR').hide();
}

function toggleQR() {
  const qr = $('#CodigoQR');
  const btn = $('#btnQr');
  qr.toggle();
  btn.text(qr.is(':visible') ? 'Ocultar QR' : 'Ver QR');
}
