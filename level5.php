<head>
  <title> PolyBlock - Level 1 </title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
<header>
	<img src="images/logo.png" class="logo" /> 
    <h1> Polyblock </h1>
    <h3> Level 5 </h3>

</header>

<div class="head">
	<a href='index.php'><button> Level 1 </button></a>
	<a href='level2.php'><button> Level 2 </button></a>
	<a href='level3.php'><button> Level 3 </button></a>
	<a href='level4.php'><button> Level 4 </button></a>
</div>

<br/>
<h2> TIMES:</h2>
<table>
<?php
require 'fonction.php';
$bdd=connect();

try
{
	$sql="SELECT niveau, pseudo, temps FROM scores,joueurs WHERE scores.IDJoueur = joueurs.id AND niveau = 5 ORDER BY temps LIMIT 10";
	$resultat= $bdd->query($sql);?>
	<div class='temps'>
	<table>
		<thead>
			<tr>
				<th>Username</th>
				<th>Time</th>
			</tr>
		</thead>
		<tbody>
<?php
	while($temps=$resultat->fetch(PDO::FETCH_OBJ))
	{
		echo "	<tr>
					<td class = 'username'>" . $temps -> pseudo . "</td>
					<td class = 'temps'>" . $temps -> temps . "</td>
				</tr>	" ;
	}	
}
catch(PDOException $e)
{
	echo "Erreur dans la requête" . $e->getMessage();
}
echo "</ul>";
?>
		</tbody>
	</table>

</div>

</body>
</html>