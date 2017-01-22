<?php 


// Vérification de la validité des informations

$erreur = '';

if ( isset($_POST['user_password']) AND isset($_POST['user_nickname']) AND isset($_POST['user_email'])
		AND !empty($_POST['user_password']) AND !empty($_POST['user_nickname']) AND !empty($_POST['user_email']) ) {
			
	if($_POST['user_password'] == $_POST['user_confirm_password']){
	
		// Hachage du mot de passe
		$pass_hache = sha1($_POST['user_password']);
		
		if ($_POST['user_nickname'] < 5) {
		
			$pseudo = htmlspecialchars ($_POST['user_nickname']);
			
			if($_POST['user_email']) {
				$email = htmlspecialchars ($_POST['user_email']);
			} else {
				$erreur = "L'adresse e-mail est incorrecte'.";
			}
			
		} else {
			$erreur = "Le pseudo doit contenir au moins 5 caractères.";
		}
		
	} else {
		$erreur = "Les mots de passes doivent être identiques.";
	}

} 

if(!empty($erreur)){

	// On affiche la page (vue) avec l'erreur
	include_once('../../vue/espace_membres/inscription.php');
	echo $erreur;
	
} else {

	// On insère en bdd
	include_once('../../modele/espace_membres/insert_membre.php');
	insert_membre($pseudo, $pass_hache, $email);
	
	// On affiche la page (vue) d'accueil
	include_once('../../vue/espace_membres/accueil.php');
}

?>