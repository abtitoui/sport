<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ajouter Gérant</title>
	<link href="../css/ajouterg.css" rel="stylesheet">
	
</head>

<body>
<?php include("menu.php");  ?>
		
	<form action="ajoutergrt.php" method="post">
	<div>
		<input type="submit" class="ajouter" value="Ajouter">
	</div>
	<table>
		<tr>
			<td class="infoName">Photo</td>
			<td class="info">
				<div class="label">
				    <input type="file" name="perphoto" accept="image/*">
				</div>
			</td>
		</tr>
		<tr>
			<td class="infoName">Nom</td>
			<td class="info" ><input type="text" name="nom"></td>
		</tr>
		<tr>
			<td class="infoName">Prénom</td>
			<td class="info" ><input type="text" name="prenom"></td>
		</tr>
		<tr>
			<td class="infoName">CIN</td>
			<td class="info" ><input type="text" name="cin"></td>
		</tr>
		<tr>
			<td class="infoName">Email</td>
			<td class="info"><input type="email" name="email"></td>
		</tr>
		<tr>
			<td class="infoName">Mot de passe</td>
			<td class="info"><input type="password" name="motdepasse"></td>
		</tr>
		<tr>
			<td class="infoName">N°téléphone</td>
			<td class="info"><input type="tel" name="numtelephone"></td>
		</tr>
		<tr>
			<td class="infoName">Fonction</td>
			<td class="info">
				<select class="fonction" name="role">
					<option selected disabled>Fonction</option>
				    <option value="gerant">Gérant</option>
                    <option value="admin">Secretaire</option>

				</select>
			</td>
		</tr>
		<tr>
			<td class="infoName">Active</td>
			<td class="info">
				<input type="radio" name="etat" value="1"><label for="checkbox">Oui</label><br>
				<input type="radio" name="etat" value="0"><label for="checkbox">Non</label><br>
				
			</td>
		</tr>
	</table>
	</form>
	
</body>
</html>
