<?php
// exo1
echo "Exo 1<br>";
for ($number=0; $number <= 10; $number++) {
  echo $number . "";
}
echo "<br><br>";

// exo2
echo "Exo 2<br>";
$number=0;
$end = 50;
while ($number < 20) {
  $calcul = $number*$end;
  echo $calcul . "<br>";
  $number += 1;
}
echo "<br><br>";

// exo3
echo "Exo 3<br>";
$second = 25;
for ($number=100; $number > 10; $number--) {
  $calcul = $number*$second;
  echo $calcul . "<br>";
}
echo "<br><br>";

// exo4
echo "Exo 4<br>";
$first = 1;
$halfie = $first + $first/2;
for ($halfie=0; $halfie <= 10; $halfie++) {
  echo $halfie . "<br>";
}
echo "<br><br>";

// exo5
echo "Exo 5<br>";
for ($i=0; $i < 15; $i++) {
  echo "On y arrive presque.<br>";
}
echo "<br><br>";

// exo6
echo "Exo 6<br>";
for ($i=20; $i >= 0; $i--) {
  echo "C'est presque bon.<br>";
}
echo "<br><br>";

// exo7
echo "Exo 7<br>";
for ($i=0; $i < 100; $i += 15) {
  echo "On tient le bon bout.<br>";
}
echo "<br><br>";

// exo8
echo "Exo 8<br>";
for ($i=200; $i >= 0; $i -= 12) {
  echo "Enfin !!!<br>";
}
echo "<br><br>";

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
