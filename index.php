<?php
session_start();
require "connect.inc.php";
require "function.inc.php";
$userErr = $mdpErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$user = test_input(post('user'));
	$mdp  = test_input(post('mdp'));

	if (empty($user)) {
		$userErr = "username is required";
	}elseif (empty($mdp)) {
		$mdpErr = "password is required";
	}elseif (!preg_match("/^[a-zA-Z0-9 +*@.]*$/",$mdp)) {
		$mdpErr = "password not correct!";
	}else {
		if (preg_match("/^[a-zA-Z ]*$/",$user)) {
			$sql = "SELECT * FROM gerants WHERE (nom='$user' OR prenom='$user') AND motdepasse='$mdp' LIMIT 1";
			$query = mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($query);
			$_SESSION['gerants'] = $row['email'];
			$_SESSION['user'] = $row['nom'];
			header('location: page/accuiel.php');
			exit;
		}else {
			$user = filter_var($user,FILTER_SANITIZE_EMAIL);
		
			if (!filter_var($user,FILTER_VALIDATE_EMAIL) === false) {
				echo "hello yassine";
				$sql = "SELECT * FROM gerants WHERE email='$user' AND motdepasse='$mdp' LIMIT 1";
				$query = mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($query);
				$_SESSION['gerants'] = $row['email'];
				$_SESSION['user'] = $row['nom'];
				header('location: page/accuiel.php');
				exit;
			}else {
				$userErr = "email is not valide!";
			}
		}
	}
		
}
echo $userErr . $mdpErr;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Se Connecter</title>
<link rel="stylesheet" href="css/login.css">
 
</head>

<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
		<div class="login">
			<img alt="logo" src="img/Logo.png" class="logo">
			<h2 class="connecter">Se connecter</h2>
			<input type="text" name="user" placeholder="Utilisateur"><br>
			<input type="password" name="mdp" placeholder="Mot de passe"><br>
			<input type="submit" name="submit" value="Connexion"><br>
		</div>
	</form>
</body>
</html>