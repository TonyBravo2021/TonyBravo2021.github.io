document.getElementById('myForm').addEventListener('submit', function(event) {
  event.preventDefault();

  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var message = document.getElementById('message').value;

  var formData = {
    name: name,
    email: email,
    message: message
  };

  // Convierte los datos a formato JSON
  var jsonData = JSON.stringify(formData);

  // Realiza una solicitud POST a la URL del archivo PHP en GitHub Pages
  fetch('https://tuusuario.github.io/guardar_datos.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: jsonData
  })
  .then(function(response) {
    if (response.ok) {
      // Si la respuesta del servidor es exitosa, muestra un mensaje al usuario
      alert('Los datos se han guardado correctamente.');
    } else {
      // Si la respuesta del servidor es un error, muestra un mensaje de error
      alert('Error al guardar los datos.');
    }
  })
  .catch(function(error) {
    // Si ocurre un error en la comunicación con el
