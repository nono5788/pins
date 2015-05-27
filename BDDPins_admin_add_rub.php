<!DOCTYPE html>
<html>

 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>
Ajout d'un pin's
 </title>
 <link rel="stylesheet" type="text/css" href="BDDPins_admin_add_rub.css" media="all" />
 
>

<?php
   /*Connection à la base de donnée*/
         include "config.php";
         include "database.fn.php";
         $link = database_connect($db);
         $dir = 'Photos/';
?>
    


<form action="BDDPins_admin_add_rub.php" enctype="multipart/form-data" 
	method="post"> 
	Nom:<br/> 
	<input type="text" name="frm_rub_name" size="50"/> 
	<br/><br/>
	Description:<br/> 
	<textarea name="frm_textarea_desc" rows="5" cols="40"></textarea>
	<br/><br/>
	<input type="submit" value="Ajouter rubrique"/> 
	</form>
    
  <?php
  if (isset($_POST['frm_rub_name']))
	{
		$RubriqueName = $_POST['frm_rub_name'];
		$RubriqueDesc = $_POST['frm_textarea_desc'];
	}
        // Date et Heure d'ajout de la rubrique
	$Date = date("Y-m-d");
	$Time = date("H:i:s");
	// Ajout de la rubrique
   
                
        $query = "INSERT INTO rubrique SET
		id='NULL', 
		rub_name='$RubriqueName',
		rub_desc='$RubriqueDesc',
		rub_dat='$Date',
		rub_time='$Time'"; 
	$result = mysql_query($query);  
        
        if (!$result) 
            {
            $message  = 'Requête invalide : ' . mysql_error() . "\n";
            $message .= 'Requête complète : ' . $query;
            die($message);
            }
        
  ?>
    
    
</html>
    

