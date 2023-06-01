<?php
// Verifique si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenga los valores de los campos del formulario
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Establezca la dirección de correo electrónico de destino
    $to = "rbravo@ugel07.gob.pe";

    // Establezca el asunto del correo electrónico
    $subject = "Nuevo mensaje de contacto";

    // Construya el cuerpo del correo electrónico
    $body = "Nombre: " . $name . "\n";
    $body .= "Correo electrónico: " . $email . "\n";
    $body .= "Mensaje: " . $message;

    // Envíe el correo electrónico
    mail($to, $subject, $body);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <style>
        /* Agregue sus estilos CSS personalizados aquí */
        body {
          font-family: Arial, sans-serif;
          background-color: #F0F8FF;
          text-align:center;
          color:#1E90FF;
          font-size:20px;
          padding-top:50px; 
       }
       form {
           display: inline-block;
           text-align: left;
       }
       label {
           display: block;
           margin-bottom: 10px;
       }
       input[type="text"], input[type="email"], textarea {
           width: 100%;
           padding: 12px 20px;
           margin: 8px 0;
           box-sizing: border-box;
           border: 2px solid #ccc;
           border-radius: 4px;
       }
       input[type="submit"] {
           width: 100%;
           background-color: #1E90FF;
           color: white;
           padding: 14px 20px;
           margin: 8px 0;
           border: none;
           border-radius: 4px;
           cursor: pointer;
       }
       input[type="submit"]:hover {
           background-color: #6495ED;
       }
    </style>
</head>
<body>
    Bienvenido usuario, el enlace de la reunión es www.zooom.com434535 y tu contraseña de acceso es XXXh4.
    <br><br>
    <form method="post">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name">
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email">
        <label for="message">Mensaje:</label>
        <textarea id="message" name="message"></textarea><br><br>
        <input type="submit" value="Enviar">
    </form> 
</body>
</html> 