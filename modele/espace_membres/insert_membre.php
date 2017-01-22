<?php
function insert_membre($pseudo, $pass_hache, $email)
{
	// TODO Connexion à la bdd problème pour bdd global...
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
	
	// Insertion
	$req = $bdd->prepare('INSERT INTO user(nickname, password, email, date_registration) VALUES(:pseudo, :pass, :email, NOW())');
	$req->execute(array(
		'pseudo' => $pseudo,
		'pass' => $pass_hache,
		'email' => $email));
}
?>