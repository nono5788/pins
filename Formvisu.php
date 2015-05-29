<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <meta charset="utf-8" />
    <title>Pin's Disney</title>
    <link rel="stylesheet" href="Formvisu.css" />
        <title></title>
    </head>
    
    <header>
        <div class="entete">
            <h1>Visualisation d'un pin's</h1>  
        </div>
    </header>    
    
    
    
    
    <body>
        <?php
        
         extract($_GET,EXTR_OVERWRITE);
         include "config.php";
         include "database.fn.php";
         $link = database_connect($db);
         $dir = 'Photos//';

         // on crée la requête SQL : on va chercher id,nom,note,photo de la table "pin's"
         $sql = "SELECT * FROM image where img_photo = '".$ident."'";
         
        // on envoie la requête
         $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

    
         while($data = mysql_fetch_assoc($req))
         {
         // on affiche les informations de l'enregistrement en cours-->
         echo "<li> Nom du pin's : ".$data['img_name']."</li>";

         echo "<li> Descriptions du pin's : <TEXTAREA NAME=\"Description\" COLS=\"50\" ROWS=\"3\" style=\"text-align:left;\">".$data['img_desc']."</TEXTAREA></li></B>";
         //echo "<TEXTAREA NAME=\"Description\" COLS=\"75\" ROWS=\"3\" style=\"text-align:left;\">".$data['img_desc']."</TEXTAREA></B>";
         echo "<img src= 'Photos\\".$data['img_photo']."' width=250 height=200 />";
         }
         ?>
        
    <div id="banniere_image">  
        <a href="gallery.php" class="bouton_rouge">Quitter <img src="Images/flecheblanchedroite.png" alt="" /></a>
    </div>
    </body>
</html>
