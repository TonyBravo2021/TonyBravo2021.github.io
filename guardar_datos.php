<?php
$datos = $_POST['datos'];

$archivo = fopen("C:\Users\bravo\Desktop/datos.txt", "a");
if ($archivo) {
  fwrite($archivo, $datos . "\n");
  fclose($archivo);
  http_response_code(200);
} else {
  http_response_code(500);
}
?>