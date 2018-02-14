<?php
// exo1
echo "<h2>Exo 1</h2>";

// print_r($_SERVER); // Get all server information (more readable in inspector)
echo "<strong>User ID:</strong> " . $_SERVER["HTTP_USER_AGENT"] . "<br>";
echo "<strong>IP Adress:</strong> " . $_SERVER["REMOTE_ADDR"] . "<br>";
echo "<strong>Server Name:</strong> " . $_SERVER["SERVER_NAME"] . "<br>";

// exo2
session_start();
echo "<h2>Exo 2</h2>";
$_SESSION["nom"] = "Hime";
$_SESSION["prenom"] = "Doll";
$_SESSION["age"] = 21;

// exo3
echo "<h2>Exo 3</h2>";
$log = $_POST["login"];
$mdp = $_POST["mdp"];
if (empty($log) && empty($mdp)) {
  echo "The required field are not filled.";
} else {
  setcookie("CookieLog", $log);
  // setcookie("CookieLog", $log, time() +/- 3600); // Set timeout for cookie
  // setrawcookie("CookieLog", $log) // set cookie without putting its value in the url (if POST method not used)
  setcookie("CookieMdp", $mdp);
  echo "Cookies have been sent";
}

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

  <a href="cookies_sessions.php"></a>
  <h2>Log In</h2>
  <form class="" action="index.php" method="POST">
    <label for="login">LOGIN</label>
    <input type="text" name="login" value="">
    <br>
    <label for="mdp">PASSWORD</label>
    <input type="password" name="mdp" value="">
    <br>
    <button type="submit" name="button">Submit</button>
  </form>

</body>
</html>
