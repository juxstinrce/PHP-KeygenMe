<html>
<head>
<title>Connexion à l'ACP</title>

<style>
	footer { position: fixed; bottom: 1em; right: 1em; }
</style>
</head>
<?php session_start(); ?>
<body><link rel='stylesheet' property='stylesheet' id='s' type='text/css' href='http://challenge01.root-me.org/template/s.css' media='all' />
<header><h3>Bienvenue sur l'ACP de BS-Corp !</h3></header>
<?php if(!isset($_SESSION['logged'])) {?>
<form method="POST" action="index.php">
		<p>Mot de passe :</p>
        <input type="password" name="password" placeholder="">
        <input type="submit">
</form>

<?php
}

include('flag.php');
if(!isset($_SESSION['logged'])) {
	if(isset($_POST['password']) && !empty($_POST['password'])) {
		$keygen = htmlspecialchars($_POST['password']);
		if(strlen($keygen) === 10) {
			if( (((((pow($_POST['password'], 10))*1337)/313373)*1337)/1337133713371337133713371337133713371337133713371337133713371337133713371337133713371337)%31337 == '1337') { 
				$_SESSION['logged'] = 1;
				echo '<br/><p>Bienvenue.</p> <p>Le site est encore en cours de construction, pour accéder à la beta veuillez vous connecter avec votre hash administrateur (?admin=)</p>';
			} else {
				echo '<br/>Mot de passe incorrect.';
			}
		} else {
			echo '<br/>Mot de passe incorrect.';
		}
	}
} else {
	if(isset($_GET['admin']) && !empty($_GET['admin'])) {
		if(hash('ripemd128', $_GET['admin'], false) == '0e13371337133713371337133713371337') {
			echo "<br/>Bien joué ! Vous pouvez valider le challenge avec ce mot de passe : " . $flag;
		} else {
			echo "<br/>Le hash est incorrect!";
		}
	} else {
		echo '<br/><p>Bienvenue.</p> <p>Le site est encore en cours de construction, pour accéder à la beta veuillez vous connecter avec votre hash administrateur (?admin=)</p>';
	}
}

?>

<footer>Dernier backup le : <?php echo date("d/m/y"); ?> à 00h00</footer>
