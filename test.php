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
        Rubrique :
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
        
        <select> 
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
                ?>
        </select>
</body>
</html>