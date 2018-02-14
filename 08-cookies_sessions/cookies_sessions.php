<?php
// exo2
echo "<h2>Exo 2</h2>";
session_start();
echo $_SESSION["nom"] . "<br>";
echo $_SESSION["prenom"] . "<br>";
echo $_SESSION["age"] . "<br>";

// exo3
echo "<h2>Exo 3</h2>";
print_r($_COOKIE);
echo "<br><strong>Cookie Log In:</strong> " . $_COOKIE["CookieLog"] . "<br>";
echo "<strong>Cookie Password:</strong> " . $_COOKIE["CookieMdp"] . "<br>";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

</body>
</html>
