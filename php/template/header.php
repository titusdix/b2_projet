
<!DOCTYPE html>
<html lang="fr">

<head>

	<meta charset="utf-8">
	<meta name="description" content="
        <?php
            if (isset($desc)){
                echo $desc;
            }
            else{
                echo 'desciption par defaut';
            }
        ?>
	">

	<title>
		<?php
            if (isset($title)) {
                echo $title;
            } 
            else{
                echo "Let's Meal";
            }
	?>
	</title>

	<link  rel="stylesheet" href="\b2_projet\css\style.css">

</head>

<body>
<header>
	<h1>
		<a href="/php2/index.php">
			<img src="/img/image.svg" alt="logo">
		</a>
		PHP2
	</h1>
</header>