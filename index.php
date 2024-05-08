<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feliz dia Mamá</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
  <style>
    body {
      background-color: rgb(206, 178, 209);
      margin: 0;
      font-family: "Nunito", sans-serif;
    }
    header{
      display: flex;
      justify-content: center;
      align-items: center; 
      height: 150px;
      background-color: rgb(177, 109, 189);
      color: white;
      font-size: 2em;
    }
    form{
      background-color: rgb(245, 231, 198);
      display: flex;
      flex-direction: column;
      height: 400px;
      width: 400px;
      padding: 20px;
      align-items: start;
      justify-content:center;
      border-radius: 25px;
      font-size: 1.5em;
      box-shadow: 1px 2px 18px 2px rgba(0,0,0,0.75);
    }
    form #nombre {
      width: 98%;
      border: none;
      height: 30px;
      border-radius: 10px;
    }
    form textarea{
      width: 98%;
      border: none;
      border-radius: 10px;
    }
    .container{
      margin-top: 30px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
    form div{
      margin-top: 40px;
      width: 100%;
      height: 50px;
      display: flex;
      align-content: center;
      justify-content: center;
    }
    form #boton{
      width: 180px;
      font-size: 1em;
      border:none;
      background-color: rgb(210, 111, 227); 
      color: white;
      border-radius: 15px;
    }
    form #boton:hover{
    
      cursor: pointer;
      box-shadow: 1px 2px 40px -3px rgba(0,0,0,0.55);
    }
  </style>
</head>
<body>
  <header>
    <h1>Feliz dia Mamá</h1>
  </header>
  <div class="container">
    <form action="send.php" method="post">
      <label for="nombre">Nombre de tu madre:</label>
      <input type="text" name="nombre" id="nombre">
      <label for="mensaje">Mensaje para tu madre:</label>
      <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
      <div>
        <input type="submit" value="Enviar" id="boton">
      </div>
      
    </form>
  </div>
</body>
</html>