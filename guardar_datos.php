<?php
// Obtener los datos enviados mediante la solicitud POST
$data = json_decode(file_get_contents('php://input'), true);

// Obtener los valores de los campos del formulario
$name = $data['name'];
$email = $data['email'];
$message = $data['message'];

// Aquí puedes realizar la lógica de guardado de datos en el formato que desees (por ejemplo, base de datos, archivo, etc.)

// Ejemplo de guardado en un archivo de texto
$file = 'datos.txt';
$content = "Nombre: $name\nEmail: $email\nMensaje: $message\n\n";
file_put_contents($file, $content, FILE_APPEND);

// Devolver una respuesta al cliente indicando el estado del guardado
http_response_code(200);
?>
