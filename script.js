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

  // Realiza una solicitud POST a la GitHub API para guardar los datos en el archivo JSON
  fetch('https://api.github.com/repos/TonyBravo2021/TonyBravo2021.github.io/formulario.json', {
    method: 'PUT',
    headers: {
      'Content-Type': 'application/json',
      'Authorization': 'token {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}'
    },
    body: JSON.stringify({
      message: 'Actualizar formulario.json',
      content: btoa(jsonData), // Codifica el contenido en Base64
      branch: 'main' // Rama en la que deseas guardar los datos
    })
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
    // Si ocurre un error en la comunicación con el servidor, muestra un mensaje de error
    alert('Error en la comunicación con el servidor.');
    console.error(error);
  });
});
