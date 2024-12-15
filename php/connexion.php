<?php
	$title = "Connexion";
	$desc ="Page de connexion ";
	include 'template/header.php';
	include 'template/nav.php';
?>

<main>
<form action="\b2_projet\php\script\login.php" method="post">
		<input type="text" name="login" placeholder="votre login">
		<input type="password" name="mdp"placeholder="votre mot de passe">
		<input type="submit">
	</form>
	<p>Pas encore de compte ? <a href="inscription.php">Créer un compte</a></p>
</main>



<?php
	include 'template/footer.php';
?>


