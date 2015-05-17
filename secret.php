<!DOCTYPE html>
<html>

    
    <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "Coukie") // Si le mot de passe est bon
    {
    // On affiche les codes

        //include "config.php";
        //include "database.fn.php";
        //$link = database_connect($db);
        //$dir = 'Photos/';

        /**** on va chercher la boucle afin d'afficher la gallery*/
        include "gallery.php";
 ?>
    <section>

    
    </section>
    </body>


<footer>
</footer>    
    
</html>
        <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>
    
        
    </body>
</html>
