<?php 

//connection à la bdd
 require ('bd/connection_mysql.php');
 /**
  * Fonction qui affiche l'entité identity
  */
function getIdentitys()
{
        $db = Database::dbConnect();
        $full_identity = $db->query('SELECT * FROM `identity` WHERE 1');
        $identity = $full_identity->fetch();

    return($identity);
 }