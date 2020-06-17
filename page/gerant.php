<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Gérant</title>
	<link rel="stylesheet" href="../css/gerant.css">
	<link rel="icon" href="../img/Logo.png" type="image/x-icon"/>

</head>

<body>
<?php include("menu.php");  ?>
	<div>
	<input type="search" placeholder="Chercher" class="search">
    <div class="btn">
    <input name="sa" type="submit" value="">
</div>
</div>
	<div>
		<a href="ajouterg.php" class="ajouter">Ajouter</a>
	</div>
		

	<table>
	<thead>
		<tr class="infoName">
			<td>Photo</td>
			<td>Nom</td>
			<td>Prénom</td>
			<td>CIN</td>
			<td>Email</td>
			<td>N°téléphone</td>
			<td>Fonction</td>
			<td>Active</td>
			<td>Action</td>
			
		</tr>
		</thead>
		<tr class="info">
			<td>
				<a href="#" name="photo"><img alt="photo" src="../img/Photo.jpg"  class="photo"></a>
			</td>
			<td>Nom</td>
			<td>Prénom</td>
			<td>CIN</td>
			<td>Email</td>
			<td>N°téléphone</td>
			<td>Fonction</td>
			<td>Active</td>
			<td>
				<a href="#" name="modifer"><img alt="modifier" src="../img/modifier.png"  class="modifier"></a>
				<a href="#" name="supprimer"><img alt="supprimer" src="../img/supprimer (1).png" class="modifier"></a>
			</td>
			
		</tr>
		<tr class="info">
			<td>
				<a href="#" name="photo"><img alt="photo" src="../img/Photo.jpg"  class="photo"></a>
			</td>
			<td>Nom</td>
			<td>Prénom</td>
			<td>CIN</td>
			<td>Email</td>
			<td>N°téléphone</td>
			<td>Fonction</td>
			<td>Active</td>
			<td>
				<a href="#" name="modifer"><img alt="modifier" src="../img/modifier.png"  class="modifier"></a>
				<a href="#" name="supprimer"><img alt="supprimer" src="../img/supprimer (1).png" class="modifier"></a>
			</td>
			
		</tr>
	</table>
</body>
</html>
