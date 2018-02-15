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

function build_calendar($month,$year,$dateArray) {
     // Create array days of week.
     $daysOfWeek = array('Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi');

     // What is the first day of the month in question?
     $firstDayOfMonth = mktime(0,0,0,$month,1,$year);

     // How many days does this month contain?
     $numberDays = date('t',$firstDayOfMonth);

     // Retrieve some information about the first day of the
     // month in question.
     $dateComponents = getdate($firstDayOfMonth);

     // What is the name of the month in question?
     $monthName = $dateComponents['month'];

     // What is the index value (0-6) of the first day of the
     // month in question.
     $dayOfWeek = $dateComponents['wday'];

     // Create the table tag opener and day headers
     $calendar = "<table class='calendar'>";
     $calendar .= "<caption>$monthName $year</caption>";
     $calendar .= "<tr>";

     // Create the calendar headers
     foreach($daysOfWeek as $day) {
          $calendar .= "<th class='header'>$day</th>";
     }

     // Create the rest of the calendar
     // Initiate the day counter, starting with the 1st.
     $currentDay = 1;
     $calendar .= "</tr><tr>";

     // The variable $dayOfWeek is used to
     // ensure that the calendar
     // display consists of exactly 7 columns.
     if ($dayOfWeek > 0) {
          $calendar .= "<td colspan='$dayOfWeek'>&nbsp;</td>";
     }

     $month = str_pad($month, 2, "0", STR_PAD_LEFT);

     while ($currentDay <= $numberDays) {
          // Seventh column (Saturday) reached. Start a new row.
          if ($dayOfWeek == 7) {

               $dayOfWeek = 0;
               $calendar .= "</tr><tr>";

          }

          $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
          $date = "$year-$month-$currentDayRel";
          $calendar .= "<td class='day' rel='$date'>$currentDay</td>";

          // Increment counters
          $currentDay++;
          $dayOfWeek++;

     }

     // Complete the row of the last week in month, if necessary
     if ($dayOfWeek != 7) {
          $remainingDays = 7 - $dayOfWeek;
          $calendar .= "<td colspan='$remainingDays'>&nbsp;</td>";
     }

     $calendar .= "</tr>";
     $calendar .= "</table>";
     return $calendar;

}

$dateComponents = getdate();
// $month = $dateComponents['mon']; // today's calendar
// $year = $dateComponents['year']; // today's calendar
$month = $_POST['month'];
$year = $_POST['year'];
if (isset($_POST['month']) && isset($_POST['year'])) {
  echo build_calendar($month,$year,$dateArray);
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
  <h2>Calendar Build</h2>
  <form class="" action="index.php" method="POST">
    <label for="month">Month</label>
    <select class="" name="month">
      <option value="1">Janvier</option>
      <option value="2">Février</option>
      <option value="3">Mars</option>
      <option value="4">Avril</option>
      <option value="5">Mai</option>
      <option value="6">Juin</option>
      <option value="7">Juillet</option>
      <option value="8">Août</option>
      <option value="9">Septembre</option>
      <option value="10">Octobre</option>
      <option value="11">Novembre</option>
      <option value="12">Décembre</option>
    </select>
    <br>
    <label for="year">Year</label>
    <select class="" name="year">
      <option value="1996">1996</option>
      <option value="1997">1997</option>
      <option value="1998">1998</option>
      <option value="1999">1999</option>
      <option value="2000">2000</option>
      <option value="2001">2001</option>
      <option value="2002">2002</option>
      <option value="2003">2003</option>
      <option value="2004">2004</option>
      <option value="2005">2005</option>
      <option value="2006">2006</option>
      <option value="2007">2007</option>
      <option value="2008">2008</option>
      <option value="2009">2009</option>
      <option value="2010">2010</option>
      <option value="2011">2011</option>
      <option value="2012">2012</option>
      <option value="2013">2013</option>
      <option value="2014">2014</option>
      <option value="2015">2015</option>
      <option value="2016">2016</option>
      <option value="2017">2017</option>
      <option value="2018">2018</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
      <option value="2021">2021</option>
      <option value="2022">2022</option>
      <option value="2023">2023</option>
      <option value="2024">2024</option>
      <option value="2025">2025</option>
    </select>
    <br>
    <button type="submit" name="button">Submit</button>
  </form>
</body>
</html>
