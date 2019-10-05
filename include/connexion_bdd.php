<?php
# Fichier de connexion au BDD
$connexion 	= 'mysql:dbname=smadev;host=127.0.0.1';
$user 		= '';
$pass 		= '';

try
{
    $DATABASE = new PDO($connexion, $user, $password);
}
catch (PDOException $e)
{
	# Envoyer un mail
    echo 'Echec de connexion au BDD : ' . $e->getMessage();
}

?>