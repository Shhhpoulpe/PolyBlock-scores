<head>
  <title> DRINKOS - Jus </title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
<header>
<img src="images/logo.png" class="logo" /> 
    <h1> DRINKOS </h1>
    <h3> Les boissons d'ici et d'ailleurs </h3>
</header>

<div class="head">
	<a href='energy.php'><button> Boissons énergisantes </button></a>
	<a href='soda.php'><button> Sodas </button></a>
	<a href='index.php'><button> Tous </button></a>
	
</div>

<br/>
<a href='panier.php'><button> Voir le panier </button></a>
<?php
session_start();
if (isset($_SESSION['id_utilisateur'])) {
			echo '<form action="deconnecter.php" method="POST">
		<button type="submit" name="submit"> Se déconnecter</button>
		</form>';

		} else {
			echo '<a href="header.php"><button> Se connecter </button></a>';
		echo '<a href="inscrire.php"><button> Inscription </button></a>';}
			
			

?>
<h2> LES JUS ET THE: </h2>
<?php

if(!empty($_SESSION['succes']))
{
?>
<div class="success">
<?php echo $_SESSION['succes']; ?>
</div>
<?php
}
?>
<table>
<?php
require 'fonction.php';
$bdd=connect();

try
{
	$sql="select * from boissons where type=0";
	$resultat= $bdd->query($sql);
	echo "<div class='produits'/>";
	echo "<ul>";
	while($produit=$resultat->fetch(PDO::FETCH_OBJ))
	{
		echo "	<li>
					<span class = 'titre'>" . $produit -> nom . "</span>
					<span class = 'image'> <img src = " . $produit -> photo . "> </span>
					<span class = 'prix'>" . $produit -> prix . "€</span>
					<a href = 'ajout_panier.php?id=" . $produit -> id . "'> <button> Ajouter au panier </button> </a>
				</li>	" ;
	}	
}
catch(PDOException $e)
{
	echo "Erreur dans la requête" . $e->getMessage();
}
echo "</ul>";
?>
</table>

</div>

</body>
</html>