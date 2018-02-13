<?php
// exo1
echo "EXO 1<br>";
function sayTrue () {
  return true;
}
echo sayTrue() . "<br><br>";

// exo2
echo "EXO 2<br>";
function sayString ($Goujat) {
  return $Goujat;
}
echo sayString("Gouda") . "<br><br>";

// exo3
echo "EXO 3<br>";
function sayAll ($Goujat, $Gouda, $Chocolat) {
  return $Goujat . ", " . $Gouda . ", " . $Chocolat . " skrrr skrrr";
}
echo sayAll("Goujat", "Gouda", "Chocolat") . "<br><br>";

// exo4
echo "EXO 4<br>";
function sayNumber ($first, $second) {
  if ($first > $second) {
    return $first . " est plus grand que " . $second;
  } else if ($first < $second) {
    return $first . " est plus petit que " . $second;
  } else {
    return $first . " est identique à " . $second;
  }
}

echo sayNumber(25, 50) . "<br>";
echo sayNumber(45, 10) . "<br>";
echo sayNumber(25, 25) . "<br><br>";

// exo5
echo "EXO 5<br>";
function sayEverything ($number, $word) {
  return "J'ai " . $number . " " . $word;
}
echo sayEverything(5, "carottes.") . "<br><br>";

// exo6
echo "EXO 6<br>";
function sayName ($nom, $prenom, $age) {
  return "Bonjour " . $nom . " " . $prenom . ", tu as " . $age . " ans.";
}
echo sayName("Zhang", "Tsinxias", 22) . "<br><br>";

// exo7
echo "EXO 7<br>";
function sayWhat ($age, $gender) {
  if ($age >= 18) {
    if ($gender == "homme") {
      return "<strong>Vous êtes un homme et vous êtes majeur.</strong>";
    } else if ($gender == "femme") {
      return "<strong>Vous êtes une femme et vous êtes majeur.</strong>";
    } else {
      return "<strong>Vous êtes du troisième type et vous êtes majeur.</strong>";
    }
  } else {
    if ($gender == "homme") {
      return "<strong>Vous êtes un homme et vous êtes mineur.</strong>";
    } else if ($gender == "femme") {
      return "<strong>Vous êtes une femme et vous êtes mineur.</strong>";
    } else {
      return "<strong>Vous êtes du troisième type et vous êtes mineur.</strong>";
    }
  }
}

echo sayWhat (27, "alien") . "<br>";
echo sayWhat (15, "homme") . "<br>";
echo sayWhat (40, "femme") . "<br><br>";

// exo8
echo "EXO 8<br>";
function sayCalcul ($first = 50, $second = 27, $third = 62) {
  $calcul = $first+$second+$third;
  return $calcul;
}

echo "Default: " . sayCalcul() . "<br>";
echo "Other: " . sayCalcul(60, 65, 90) . "<br><br>";

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
