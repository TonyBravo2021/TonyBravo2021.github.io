<?php
// Obtener los valores enviados por el formulario
$texto1 = $_POST['texto1'];
$texto2 = $_POST['texto2'];
$texto3 = $_POST['texto3'];
$texto4 = $_POST['texto4'];

// Crear una cadena con los datos del formulario
$datos_formulario = "Texto 1: $texto1\nTexto 2: $texto2\nTexto 3: $texto3\nTexto 4: $texto4\n";

// Guardar los datos en un archivo de texto
$archivo = 'datos_formulario.txt';
file_put_contents($archivo, $datos_formulario, FILE_APPEND);

// Mostrar un mensaje de éxito
echo 'Los datos se han guardado correctamente.';
?>
