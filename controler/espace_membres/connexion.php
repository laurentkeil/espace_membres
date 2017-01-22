<?php 

$pseudo = htmlspecialchars ($_POST['user_nickname']);
// Hachage du mot de passe
$pass_hache = sha1($_POST['user_password']);
	
include_once('../../modele/espace_membres/select_membre.php');

$resultat = select_membre($pseudo, $pass_hache);

//vérification des id
if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
	include_once('../../vue/espace_membres/accueil.php');
}
else
{	
    session_start();
    $_SESSION['id_user'] = $resultat['id_user'];
    $_SESSION['pseudo'] = $pseudo;
	
	if(isset($_POST['remember'])) {
		// ajout des cookies de connexion automatique
		setcookie('login', $pseudo);
		setcookie('pass_hache', $pass_hache);
	}
	
    echo 'Vous êtes connecté !';
	include_once('../../vue/espace_membres/accueil.php');
}

?>