<?php
	$title = "Connexion";
	$desc ="Page de connexion ";
	include 'template/header.php';
	include 'template/nav.php';
?>



<main>
	<!-- formulaire d'inscription qui fait appelle a la page inscription_client.php -->
	<h1>Inscription</h1>
	<form action="\b2_projet\php\script\add_user.php" method="post">
		<input type="text" name="nom" placeholder="votre nom">
		<input type="text" name="prenom" placeholder="votre prenom">
		<input type="text" name="login" placeholder="votre login">
		<input type="text" name="email" placeholder="votre email">
		<input type="password" name="mdp"placeholder="votre mot de passe">
		<input type="submit">
		


	</form>


</main>


<?php
	include 'template/footer.php';
?>


