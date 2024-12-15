<?php 
if (
    // Vérification que toutes les variables existent et ne sont pas vides
    isset($_POST['nom']) && 
    isset($_POST['prenom']) && 
    isset($_POST['login']) && 
    isset($_POST['email']) && 
    isset($_POST['mdp']) &&
    !empty($_POST['nom']) && 
    !empty($_POST['prenom']) && 
    !empty($_POST['login']) && 
    !empty($_POST['email']) && 
    !empty($_POST['mdp']) 
)
{
	echo "<script>console.log(" . json_encode("aille") . ");</script>";
	// on filtre les entrés
	$nom=filter_input(INPUT_POST , 'nom' , FILTER_SANITIZE_SPECIAL_CHARS);
	$prenom=filter_input(INPUT_POST , 'prenom' , FILTER_SANITIZE_SPECIAL_CHARS);
	$login=filter_input(INPUT_POST , 'login' , FILTER_SANITIZE_SPECIAL_CHARS);
	$email=filter_input(INPUT_POST , 'email' , FILTER_SANITIZE_SPECIAL_CHARS);
	$mdp=filter_input(INPUT_POST , 'mdp' , FILTER_SANITIZE_SPECIAL_CHARS);







	include_once '../template/db.php';
	// on importe notre ficher de connexion a la bdd
	$sql = $conect->prepare("INSERT INTO users (nom,prenom,login,email,mdp) VALUES (:a,:b,:c,:d,:e)");
	$sql->bindParam(':a',$nom);
	$sql->bindParam(':b',$prenom);
	$sql->bindParam(':c',$login);
	$sql->bindParam(':d',$email);
	$sql->bindParam(':e',$mdp);

	// si la connection fonctione on va sur le client sinon on retourne sur l'incription 
	if($sql->execute()){
		header('location:../accueil_co.php');
	}

	else{
		header('location:../error_coo.php');
}
	
}


?>
