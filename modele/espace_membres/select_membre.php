
<?php
function select_membre($pseudo, $pass_hache)
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
	
	//sélection de l'id du membre
	$req = $bdd->prepare('SELECT id_user FROM user WHERE nickname = :pseudo AND password = :pass');
	$req->execute(array(
		'pseudo' => $pseudo,
		'pass' => $pass_hache));

	$resultat = $req->fetch();
	return $resultat;
}
?>