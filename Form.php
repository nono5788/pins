<!DOCTYPE html>
<html>
    
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>
Ajout d'un pin's
 </title>
 <link rel="stylesheet" type="text/css" href="Form.css" media="all" />
 
 </head>
 <body>
 <div id="form_container">
 <h1>
 <a></a>
 </h1>
<form method="post" action="insert_form.php" enctype="multipart/form-data">
 
 <ul>
 <li class="section_break">
 <h3>Pin's presque près à l'upload !</h3>
 </li>
 <li> Rubrique :
       
        <?php
        /*Connection à la base de donnée*/
         include "config.php";
         include "database.fn.php";
         $link = database_connect($db);
         $dir = 'Photos/';


 
    /*Tu définie dans une variable ta requete*/
    $requete="SELECT id,rub_name FROM rubrique";
 
    /*Tu éxecute ta requete et tu place le resultat dans une autre variable*/
    $resultat = mysql_query($requete);
 ?>
        
        <select name="lst_rub"> 
                <?php         
                   /*Ensuite on fetch (parcours) sur le resultat*/
                    while ($donnees = mysql_fetch_array($resultat) )
                        {

                   /*$donnees est un array(tableau) de $resultat*/
                /*?>*/      
                   echo '<option value="'.$donnees['rub_name'].'">'.$donnees['rub_name'].'</option>';
                /*<?php*/

                        } 
            /* on referme l'accolade de la boucle while */
                     $rub = $donnees['rub_name'] ;
                   
                ?>
        </select>
 
 </li>
 <li>  
     <?php 

      echo('La varialbe est' .$donnees['rub_name']); ?></li>  
 <li>
     <p><span> <label>Nom du pin's  </label><input id="nom" name="nom" class="element text long" type="text" maxlength="255" value="" /></span></p>
 <li><p><span> <label>Description   </label><input id="desc" name="desc" class="element text long" type="text" maxlength="255" value=""/></span></p>
 <spa

 
 </li>
 <li>
 <label for="image"> Ajoute une photo de ton pin's: </label>
 <input type="hidden" name="MAX_FILE_SIZE" value="300000" >
 <input type="file" id="file" name="image">
 <input type="submit" name="envoyer" value="Ajouter">
 </li>
 </ul>
</form>
 <div id="footer">
 &nbsp;
 </div>
 </div>    
 </body>
 
 
 
</html>

