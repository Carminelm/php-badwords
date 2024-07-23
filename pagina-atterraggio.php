<?php

$name = $_GET['name'];
$lastname = $_GET['lastname'];


$censura = str_replace('///','name',$name);
$lunghezza_testo_originale = strlen($lastname);

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina atterraggio GET</title>
</head>
<body>

<h1>Grazie <?php echo $censura ?> <?php echo $lastname ?> per averci scritto</h1>

<strong>Questo testo ha <?php echo $lunghezza_testo_originale ?> caratteri</strong>
  
</body>
</html>