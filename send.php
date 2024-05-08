<?php

$name = $_POST['nombre'];
$message = $_POST['mensaje'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Carta para mama</title>
</head>
<body>
  <div class="card">
    <h1>Carta para mamá</h1>
    <p>Querida mamá:</p>
    <p><?php echo $message; ?></p>
    <p>Con cariño, <?php echo $name; ?></p>
  </div>
  <img src="flowers1.png" alt="" class="img-deco">
  <img src="flowers2.png" alt="" class="img-deco rotate">
</body>
</html>