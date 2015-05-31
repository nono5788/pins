<?php
 
$connection = mysql_connect("sql.free.fr","pinsdineydev","Ines@2001");
// loc$connection = mysql_connect("localhost","root","root");
$database = mysql_select_db("pinsdineydev"); 
// loc$database = mysql_select_db("Pins");
         //include "config.php";
         //include "database.fn.php";
         //$link = database_connect($db);

$Date = date("Y-m-d");
$Time = date("H:i:s"); 

// ***** ici on récupère les données et on les stocke dans mysql
$nom = $_POST['nom'];
$desc = $_POST['desc'];




//******* On renomme l'image de manière aléatoire pour éviter un conflit dans le dossier (2 fois le même nom par exemple
$dir = 'Photos/';
$ext = strtolower( pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION) );
$file = uniqid('pho_').'.'.$ext;
 
 //**** on bouge l'image
move_uploaded_file($_FILES['image']['tmp_name'], $dir.$file);
 
$photo = $file;




// on enregistre les données
$result = mysql_query("INSERT INTO image(img_rub,img_name, img_desc, img_photo) VALUES
(
'".mysql_real_escape_string($rub)."',
'".mysql_real_escape_string($nom)."',
'".mysql_real_escape_string($desc)."',
'".mysql_real_escape_string($photo)."'
)
");
//Si il y a une erreur, on crie ^^
if (!$result) {
 die('Requête invalide : ' . mysql_error());
}
// on ferme la connection mysql donc ci-dessous plus de sql

include 'gallery.php';
mysql_close($link);
?>    