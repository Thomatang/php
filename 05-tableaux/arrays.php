<?php
// exo1
echo "Exo 1<br>";
$mois = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
// foreach ($mois as $key => $value) {
//   echo $value . "<br>";
// }
echo "<br>";

// exo2
echo "Exo 2<br>";
echo $mois[2] . "<br><br>";

// exo3
echo "Exo 3<br>";
echo $mois[5] . "<br><br>";

// exo4
echo "Exo 4<br>";
$mois[7]  = "Août";
echo $mois[7] . "<br><br>";

// exo5
echo "Exo 5<br>";
$auvergne = array(
  "01" => "Ain",
  "03" => "Allier",
  "07" => "Ardèche",
  "15" => "Cantal",
  "26" => "Drôme",
  "38" => "Isère",
  "42" => "Loire",
  "43" => "Haute-Loire",
  "63" => "Puy-de-Dôme",
  "69D" => "Rhône",
  "69M" => "Métropole de Lyon",
  "73" => "Savoie",
  "74" => "Haute-Savoie",
);
echo "<br>";

// exo6
echo "Exo 6<br>";
echo $auvergne["69D"] ."<br>";
echo $auvergne["69M"] . "<br><br>";

// exo7
echo "Exo 7<br>";
$auvergne["53"] = "Metz";
echo $auvergne["53"] . "<br><br>";

// exo8
echo "Exo 8<br>";
foreach ($mois as $key => $value) {
  echo $value . "<br>";
}
echo "<br>";

// exo9
echo "Exo 9<br>";
foreach ($auvergne as $key => $value) {
  echo($value) ."<br>";
}
echo "<br><br>";

// exo10
echo "Exo 10<br>";
foreach ($auvergne as $key => $value) {
  echo "Le département " . $value . " a le numéro " . $key . ".<br>";
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
