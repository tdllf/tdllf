<?php

$DEBUT = microtime(true);

try {
  $bdd = new PDO('mysql:host=tdllffrcrkdatab.mysql.db;dbname=tdllffrcrkdatab', 'tdllffrcrkdatab', "Jssmbddejsne1995");
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();

}

error_reporting(E_ALL);

$query = 'SELECT username, password FROM users';	
$requete = $bdd->prepare($query);
$requete->execute(array('username' => $username, 'password' => $password));
$resultat = $requete->fetch(PDO::FETCH_ASSOC);
if($resultat['username'] == $_POST['username'] AND $resultat['password'] == $_POST['password']){
echo '<p style="color:ffffff;">Requêtes réussies</p>';
}else{
header('location:loginpage.php');
}






?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Développeur/Intégrateur d'applications web">
    <meta name="keywords" content="SEO, CMS, HTML, POO, JS, JavaScript, CSS, Jquery, PHP, Symfony, SQL">
    <meta name="author" content="Thibaut Le Feuvre">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>Thibaut Le Feuvre - Développement de sites webs responsives</title>
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Mr+Dafoe" rel="stylesheet">
	  <link rel="stylesheet" href="styletest.css">
</head>
<body>
  <header>
      <nav class="nav-admin">
        <h1>Bienvenue THIBAUT,</h1>
      </nav>
  </header>
<main>
</main>

<?php
$FIN = microtime(true);
$DUREE = $FIN - $DEBUT;
?>
<p style="color:#ffffff;">Page générée en : <?= $DUREE ?> ms.</p>
<p style="color:ffffff;">Page générée en : <?= $_SERVER["REQUEST_TIME"] ?> ms.</p>
<p style="color:ffffff;">Page générée à  : <?= date('d/m/Y - H:i:s') ?></p>


	