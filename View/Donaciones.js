document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector(".formDonaciones");
  ocultarQR();

  const btnCodigoQR = document.getElementById('btnQr');

  btnCodigoQR.addEventListener('click', VerQR);

  form.addEventListener("submit", function (e) {
    e.preventDefault(); // Evita el envío tradicional del formulario

    // Asigna atributos "name" a los campos que no los tengan
    document.getElementById("txtNombre").setAttribute("name", "nombre");
    document.getElementById("txtApellido").setAttribute("name", "apellido");
    document.getElementById("txtMonto").setAttribute("name", "monto");
    document.getElementById("txtCorreoElectronico").setAttribute("name", "correoElectronico");
    document.getElementById("txtMetodoPago").setAttribute("name", "metodoPago");

    // Validación: comprueba que el correo y su confirmación sean iguales
    const correo = document.getElementById("txtCorreoElectronico").value;
    const correoConfirmar = document.getElementById("txtCorreoConfirmar").value;
    if (correo !== correoConfirmar) {
      alert("Los correos electrónicos no coinciden.");
      return;
    }

    // Cambia el texto del botón para indicar que se está enviando
    const btn = document.getElementById("btnEnviarDonacion");
    btn.innerText = "Enviando...";

    // Primero, guarda la donación en la base de datos
    guardarRegistroDonaciones()
      .then(() => {
        btn.innerText = "Enviar Donación";
        alert("¡Éxito! La información se ha enviado correctamente.");
        form.reset(); // Limpiar el formulario después de un registro exitoso
      })
      .catch((err) => {
        btn.innerText = "Enviar Donación";
        alert("Hubo un error en el proceso: " + JSON.stringify(err));
      });
  });
});

function guardarRegistroDonaciones() {
  return new Promise((resolve, reject) => {
    const txtNombre = document.getElementById('txtNombre').value;
    const txtApellido = document.getElementById('txtApellido').value;
    const txtMonto = document.getElementById('txtMonto').value;
    const txtCorreoElectronico = document.getElementById('txtCorreoElectronico').value;
    const txtCorreoConfirmar = document.getElementById('txtCorreoConfirmar').value;
    const txtMetodoPago = document.getElementById('txtMetodoPago').value;

    if (txtCorreoElectronico !== txtCorreoConfirmar) {
      alert('Los correos electrónicos no coinciden');
      reject("Los correos no coinciden");
      return;
    }

    const datosDonacion = new FormData();
    datosDonacion.append('nombre', txtNombre);
    datosDonacion.append('apellido', txtApellido);
    datosDonacion.append('monto', txtMonto);
    datosDonacion.append('correoElectronico', txtCorreoElectronico);
    datosDonacion.append('metodoPago', txtMetodoPago);

    // Enviar los datos al controlador
    fetch('controlador/DonacionesControlador.php', {
      method: 'POST',
      body: datosDonacion
    })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          resolve(); // Registro exitoso
        } else {
          reject('Hubo un error al procesar la donación');
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
function VerQR() {
  $('#CodigoQR').toggle(); // Alterna entre mostrar y ocultar
}