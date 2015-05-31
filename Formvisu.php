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
    <title>Visualisation d'un pin's</title>
    </head>
    <body>
    <header>
        <div class="entete">
            <h1>Visualisation d'un pin's</h1>  
        </div>
    </header>    
    
        <div class="form">
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
         echo "<li><strong> Nom du pin's : </strong>".$data['img_name']."</li>";
         echo"</br>";
         //echo "<li><strong>ID du pin's :</strong> ".$data['img_id']."</li>";

         //on affecte l'id à la variable var1
         $var1=$data['img_id'];

         
         // on crée la requête SQL 
         $sql1 = "SELECT * FROM rubrique where id = '".$data['img_rub']."'";  

         // on envoie la requête
         $req1 = mysql_query($sql1) or die('Erreur SQL !<br>'.$sql1.'<br>'.mysql_error());
         while($data1 = mysql_fetch_assoc($req1))
         {        
         echo "<li><strong>Catégorie du pin's :</strong> ".$data1['rub_name']."</li>";
         }
         echo"</br>";   
         echo "<li><strong> Descriptions du pin's : </strong>";
         echo "</br>";
         echo "<TEXTAREA NAME=\"Description\" COLS=\"50\" ROWS=\"3\" style=\"text-align:left;\">".$data['img_desc']."</TEXTAREA></li></B>";
         //echo "<li><strong> Descriptions du pin's : </strong> <TEXTAREA NAME=\"Description\" COLS=\"50\" ROWS=\"3\" style=\"text-align:left;\">".$data['img_desc']."</TEXTAREA></li></B>";
         echo"</br>";
         echo"</br>";
         echo "<img src= 'Photos\\".$data['img_photo']."' width=250 height=200 />";
         }
         ?>
        </div>
 <div class="nav">         
    <div id="banniere_image">   
        <a href="gallery.php" class="bouton_rouge">Quitter <img src="Images/flecheblanchedroite.png" alt=""/></a> 
        <?php
        echo "<a href=delete.php?id1=$var1 class=\"bouton_del\">Suppression <img src=\"Images/flecheblanchedroite.png\" alt=\"\"/></a>";
        mysql_close($link);
        ?> 
    </div>   
 </div>
 </body>
</html>
echo "<a href= Formvisu.php?ident=".$data['img_photo'].">
