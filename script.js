// Listener para el evento 'submit' del formulario
document.getElementById('myForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Previene el envío por defecto del formulario

  // Obtiene los valores de los campos del formulario
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var message = document.getElementById('message').value;

  // Crea un objeto con los datos del formulario
  var formData = {
    name: name,
    email: email,
    message: message
  };

  // Convierte el objeto a formato JSON
  var jsonData = JSON.stringify(formData);

  // Crea un elemento 'a' para descargar el archivo
  var downloadLink = document.createElement('a');
  downloadLink.href = 'data:application/json;charset=utf-8,' + encodeURIComponent(jsonData);
  downloadLink.download = 'formulario.json';

  // Simula un clic en el enlace para iniciar la descarga
  downloadLink.click();
});
