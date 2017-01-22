

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <head>
        <title>Mon site</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link href="vue/blog/style.css" rel="stylesheet" type="text/css" /> 
    </head>
        
    <body>
        <h1>Accueil</h1>
 
 
			Bonjour et bienvenue sur mon site.</br></br>
			
			<?php
			if ( (isset($_SESSION['id_user']) AND isset($_SESSION['pseudo'])) OR (isset($_COOKIE['login']) AND isset($_COOKIE['pass_hache'])) )
			{
				echo 'Bonjour ' . $_SESSION['pseudo'];
				?>
				<form action="../../controler/espace_membres/deconnexion.php" method="post">
				<p>
					<input type="submit" value="Se déconnecter" />
				</p>
				</form>
				<?php
			} else {
			?>
			
			Se <a href="/espace_membres/vue/espace_membres/connexion.php">connecter</a>.
			
			<?php
			}
			?>
 
	</body>
</html>
