<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php

    extract($_GET,EXTR_OVERWRITE);
    include "config.php";
    include "database.fn.php";
    $link = database_connect($db);
    $dir = 'Photos//';
    //Ecriture de la requête SQL
    $sql1 = "select * from image where img_id = '".$id1."'";

    // on envoie la requête
    $req = mysql_query($sql1) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

         while($data = mysql_fetch_assoc($req))
         {
         $var2 = $data['img_photo'];
         $sql2 = "delete from image where img_id = '".$id1."'";
         $req = mysql_query($sql2) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
         unlink ("Photos/".$var2);
       
         }
         Echo'Suppression de l\'enregistrement effectué';
         ?>
        <a href="gallery.php" class="bouton_rouge">OK <img src="Images/flecheblanchedroite.png" alt=""/></a> ;
         <?php
         
         mysql_close($link)
         
         ?>  
    
  </body>
</html>
