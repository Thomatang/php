<?php
// http://php.net/manual/fr/function.date.php
// exo1
echo "<h2>Exo 1</h2>";
date_default_timezone_set('Europe/Brussels');
setlocale(LC_TIME,'fr_FR.UTF-8');
echo "La date d'aujourd'hui: ".date("d/m/Y");

// exo2
echo "<h2>Exo 2</h2>";
echo "La date d'aujourd'hui: ".date("d-m-y");

// exo3
echo "<h2>Exo 3</h2>";
echo "La date d'aujourd'hui (English): ".date("l j F Y")."<br>";
echo "La date d'aujourd'hui (Français): ".strftime("%A %d %B %Y");

// exo4
echo "<h2>Exo 4</h2>";
$timing = $_SERVER["REQUEST_TIME"];
$date = new DateTime("@$timing");
echo $date->format('U = l j F Y H:i');

// exo5
echo "<h2>Exo 5</h2>";
echo "Today: ".date("d-m-Y")."<br>";
echo "Some date: 16-05-2016<br>";

$aujourdhui = $_SERVER["REQUEST_TIME"];
$dateCalcul = strtotime("16-05-2016");

$difference = $aujourdhui-$dateCalcul;
$nbJours = $difference/86400;

echo "Days between dates: ".$nbJours;

// exo6
echo "<h2>Exo 6</h2>";
$daysInFeb = cal_days_in_month(CAL_GREGORIAN, 2, 2017);
echo "There were {$daysInFeb} days in Februari 2017.";

// exo7
echo "<h2>Exo 7</h2>";
$date = date("d-m-Y");
echo date("d-m-Y", strtotime($date. "+ 20 days"));

// exo8
echo "<h2>Exo 8</h2>";
$date = date("d-m-Y");
echo date("d-m-Y", strtotime($date. "- 22 days"));

// TP
echo "<h2>TP</h2>";
// $month= date ("m");
// $year=date("Y");
// $day=date("d");
// $endDate=date("t",mktime(0,0,0,$month,$day,$year));
// echo '<font face="arial" size="2">';
// echo '<table align="center" border="0" cellpadding=5 cellspacing=5 style=""><tr><td align=center>';
// echo "Today : ".date("F, d Y ",mktime(0,0,0,$month,$day,$year));
// echo '</td></tr></table>';
// echo '<table align="center" border="0" cellpadding=1 cellspacing=1 style="border:1px solid #CCCCCC">
// <tr bgcolor="#EFEFEF">
// <td align=center><font color=red>Lundi</font></td>
// <td align=center>Mardi</td>
// <td align=center>Mercredi</td>
// <td align=center>Jeudi</td>
// <td align=center>Vendredi</td>
// <td align=center>Samedi</td>
// <td align=center>Dimanche</td>
// </tr>';
// $s=date ("w", mktime (0,0,0,$month,1,$year));
// for ($ds=1;$ds<=$s;$ds++) {
// echo "<td style=\"font-family:arial;color:#B3D9FF\" align=center valign=middle bgcolor=\"#FFFFFF\">
// </td>";}
// for ($d=1;$d<=$endDate;$d++) {
// if (date("w",mktime (0,0,0,$month,$d,$year)) == 0) { echo "<tr>"; }
// $fontColor="#000000";
// if (date("D",mktime (0,0,0,$month,$d,$year)) == "Sun") { $fontColor="red"; }
// echo "<td style=\"font-family:arial;color:#333333\" align=center valign=middle> <span style=\"color:$fontColor\">$d</span></td>";
// if (date("w",mktime (0,0,0,$month,$d,$year)) == 6) { echo "</tr>"; }}
// echo '</table>';
// echo "<p style=\"text-align:center;color:#555;\"><a style=\"text-decoration:none;color:#555;\" href='http://tutorial.world.edu/web-development/how-to-create-simple-dynamic-calendar-table-php/'>PHP Calendar Table</a> by <a style=\"text-decoration:none;color:#555;\" href='http://tutorial.world.edu'>Tutorial.World.Edu</a></p>";
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
