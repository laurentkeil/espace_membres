<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <head>
        <title>Mon site</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link href="vue/blog/style.css" rel="stylesheet" type="text/css" /> 
    </head>
        
    <body>
        <h1>Connexion</h1>
 
 
		<form action="../../controler/espace_membres/connexion.php" method="post">
		<p>
			<label for="nickname">Pseudo</label><input type="text" name="user_nickname" /></br>
			<label for="password">Mot de passe</label> <input type="password" name="user_password" /></br>
			
			<label for="remember">Connexion automatique</label><input type="checkbox" name="remember" /></br></br>
			
			<input type="submit" value="Se connecter" />
		</p>
		</form>
 
 
	</body>
</html>
