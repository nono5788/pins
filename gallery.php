<!DOCTYPE html>
<html>

<!-- Titre de la page-->    
<head>
    <meta charset="utf-8" />
    <title>Pin's Disney</title>
    <link rel="stylesheet" href="gallery.css" />
</head>  

<body>
<header>
    <div class="entete">
        <h1><img src="images/Mickey1.png" alt="" height="70"/>Ma collection de pin's Disney en ligne   
        <img src="images/Mickey1.png" alt="" height="70" /></h1> 
    </div>
</header>

 <!--Bannière-->   
 <div class="nav"> 
    <div id="banniere_image">  
       <a href="Form.php" class="bouton_rouge">Ajout pin's <img src="images/flecheblanchedroite.png" alt="" /></a>
    </div>
  </div>
    <br><br>
    
    <div class="pins">
    <section>
        <?php


        /*connection à la base Mysql*/
         include "config.php";
         include "database.fn.php";
         $link = database_connect($db);
         $dir = 'Photos//';


         // on crée la requête SQL : on va chercher id,nom,note,photo de la table "pin's"
         $sql = 'SELECT * FROM image';
         
        // on envoie la requête
         $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
        
         // on fait une boucle qui va faire un tour pour chaque enregistrement , en gros tant qu'il y aura encore un Pin's dans la table
         while($data = mysql_fetch_assoc($req))
         {
         // on affiche les informations de l'enregistrement en cours
         echo "<a href= Photos\\".$data['img_photo']."><img src= 'Photos\\".$data['img_photo']."' width=150 height=100 />";
         echo "</div>";
         } ;
         echo "<div class='spacer'></div>";
         echo "<br> <br>";
         echo "</div>"; 
         mysql_close($link);
         ?>
         <figcaption>L'ensemble de mes pin's</figcaption>

    </section>
    </div>
        <footer>
            <div class ="pied">
                <p>Copyright Nono5788 - Tous droits réservés

            </div>
        </footer>
    
    
</html>