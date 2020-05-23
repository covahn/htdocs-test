<?php    
  // Connect to DB
  $DB = new mysqli("172.16.248.195", "max", "XhLEccOP");

  if ($DB->connect_error) {
    echo("TRICITY is currently down. Try again later.");
  } else {
    echo("CONNECTED.");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="theme-color" content="#00000">
  <title>Document</title>
</head>

<body>

</body>

</html>