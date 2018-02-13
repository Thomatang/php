<?php
// exo1-3
echo "Exo 1-3<br>";
echo $_GET["nom"] . "<br>";
echo $_GET["prenom"] . "<br><br>";

// exo2-4
echo "Exo 2-4<br>";
echo $_POST["nom"] . "<br>";
echo $_POST["prenom"] . "<br><br>";


echo "Exo 5: Form 3<br>";
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

   <?php
   if ($_POST["genre"] != '' && $_POST["nom"] != '' && $_POST["prenom"] != '') {
     // exo5
     echo $_POST["genre"] . "<br>";
     echo $_POST["nom"] . "<br>";
     echo $_POST["prenom"] . "<br>";
     if (pathinfo($_FILES["files"]['name'])['extension'] == 'pdf') {
       echo ($_FILES["files"]['name']) . "<br><br>";
     } else {
       echo $_FILES["files"]['name'] . " is not a .pdf file";
       ?>
       <h2>Form 3</h2>
       <form class="" action="forms.php" method="POST" enctype="multipart/form-data">
         <select class="" name="genre">
           <option value="Monsieur">Monsieur</option>
           <option value="Madame">Madame</option>
         </select>
         <br>
         <input type="text" name="nom" value="" placeholder="Nom">
         <br>
         <input type="text" name="prenom" value="" placeholder="Prenom">
         <br>
         <input type="file" name="files" value="file">
         <br>
         <button type="submit" name="button"> Submit</button>
       </form>
       <?php
     }
   } else {
     echo "Veuillez remplir tous les champs";
    ?>
    <h2>Form 3</h2>
    <form class="" action="forms.php" method="POST" enctype="multipart/form-data">
      <select class="" name="genre">
        <option value="Monsieur">Monsieur</option>
        <option value="Madame">Madame</option>
      </select>
      <br>
      <input type="text" name="nom" value="" placeholder="Nom">
      <br>
      <input type="text" name="prenom" value="" placeholder="Prenom">
      <br>
      <input type="file" name="files" value="file">
      <br>
      <button type="submit" name="button"> Submit</button>
    </form>
    <?php } ?>

   <h2>Form 1</h2>
   <form class="" action="forms.php" method="GET">
     <input type="text" name="nom" value="">
     <input type="text" name="prenom" value="">
     <button type="submit" name="button"> Submit</button>
   </form>

   <h2>Form 2</h2>
   <form class="" action="forms.php" method="POST">
     <input type="text" name="nom" value="">
     <input type="text" name="prenom" value="">
     <button type="submit" name="button"> Submit</button>
   </form>

 </body>
 </html>
