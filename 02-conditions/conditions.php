<?php
// exo1
echo "EXO 1<br>";
$age = 25;
if ($age >= 18) {
  echo "<strong>Vous êtes majeur.</strong><br><br>";
} else {
  echo "<strong>Vous êtes mineur.</strong><br><br>";
}

// exo2
echo "EXO 2<br>";
$isEasy = false;
if ($isEasy) {
  echo "<strong>C'est facile !!</strong><br><br>";
} else if ($isEasy == 0) {
  echo "<strong>C'est difficile !!</strong><br><br>";
}

// exo3
echo "EXO 3<br>";
$age = 15;
$genre = "femme";
if ($age >= 18) {
  if ($genre == "homme") {
    echo "<strong>Vous êtes un homme et vous êtes majeur.</strong><br><br>";
  } else {
    echo "<strong>Vous êtes une femme et vous êtes majeur.</strong><br><br>";
  }
} else if ($age < 18){
  if ($genre == "homme") {
    echo "<strong>Vous êtes un homme et vous êtes mineur.</strong><br><br>";
  } else {
    echo "<strong>Vous êtes une femme et vous êtes mineur.</strong><br><br>";
  }
}

// exo4
echo "EXO 4<br>";
$magnitude = 5;
switch ($magnitude) {
  case '1':
    echo "Micro-séisme impossible à ressentir.<br><br>";
    break;
  case '2':
    echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.<br><br>";
    break;
  case '3':
    echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.<br><br>";
    break;
  case '4':
    echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.<br><br>";
    break;
  case '5':
    echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.<br><br>";
    break;
  case '6':
    echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance(180km) autour de l'épicentre.<br><br>";
    break;
  case '7':
    echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distanc..<br><br>";
    break;
  case '8':
    echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.<br><br>";
    break;
  case '9':
    echo "Séisme capable de tout détruire sur une très vaste zone.<br><br>";
    break;
  default:
    echo "Pas de séisme.<br><br>";
    break;
}

// exo5
echo "EXO 5<br>";
$maVariable = "Femme";
if ($maVariable != "Homme") {
  echo "C'est une développeuse !!!<br><br>";
} else {
  echo "C'est un développeur !!!<br><br>";
}

// exo6
echo "EXO 6<br>";
$maVariable = 10;
if ($maVariable >=18) {
  echo "Tu es majeur.<br><br>";
} else {
  echo "Tu n'es pas majeur.<br><br>";
}

// exo7
echo "EXO 7<br>";
$maVariable = 1;
if ($maVariable) {
  echo "C'est ok !!!<br><br>";
} else {
  echo "C'est pas bon !!!<br><br>";
}

// exo8
echo "EXO 8<br>";
$maVariable = false;
if ($maVariable) {
  echo "C'est ok !!!<br><br>";
} else {
  echo "C'est pas bon !!!<br><br>";
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

 </body>
 </html>
