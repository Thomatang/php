<?php
// exo 1
// initialize
$first = $_POST['first'];
$second = $_POST['second'];
$plus = "+";
$minus = "-";
$multiplication = "*";
$division = "/";
$button = $_POST['plus_button'];
echo $button;
if($button) {
  echo "hello";
}

echo "Your calcul: "."<br />";
echo "Answer: ";
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
  <h2>Calculator</h2>
  <form class="" action="calculatrice.php" method="post" enctype="multipart/form-data">
    <input type="number" name="first" value=first"">
    <br>
    <button type="button" name="plus_button">+</button>
    <button type="button" name="minus_button">-</button>
    <button type="button" name="multiplication_button">*</button>
    <button type="button" name="division_button">/</button>
    <br>
    <input type="number" name="second" value="second">
    <br>
    <button type="submit" name="button">Calcul</button>
  </form>
</body>
</html>
