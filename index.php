<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feliz dia Mamá</title>
</head>
<body>
  <form action="send.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre">
    <label for="mensaje">Mensaje:</label>
    <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>