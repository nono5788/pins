<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="visu.css" media="all" />
</head>
<title>
</title> 
<body>
<div id="form_container">
<h1>
<h1>Visualisation</h1>
</h1>
<form method="post" action="visu.php" enctype="multipart/form-data">
 
    
 <ul>
 <li class="section_break">

 
Rubrique : </li>
      
    <?php
       
        //on ouvre la base de données
         include "config.php";
         include "database.fn.php";
         $link = database_connect($db);
         $dir = 'Photos//';


         // on crée la requête SQL : on va chercher id,nom,note,photo de la table "pin's"
         $sql = 'SELECT * FROM image';
         
        // on envoie la requête
         $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
         

    while ($data = mysql_fetch_assoc($req))
    {
    echo 'toto';
    echo "<input type='text' name='Nom' value='$data[img_name]'/>";
    echo "<input type='text' name='Description' value='$data[img_desc]'/>";
    echo 'titi';
    };
    
    ?>



