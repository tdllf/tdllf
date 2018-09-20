<?php 

$DBhost  = "tdllffrcrkdatab.mysql.db";
$DBowner = "tdllffrcrkdatab";
$DBpw    = "Jssmbddejsne1995";

try {
  $bdd = new PDO('mysql:host='.$DBhost.';dbname='.$DBowner, $DBowner, $DBpw);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

$query = 'SELECT * FROM datalogin';	
$requete = $bdd->prepare($query);
$requete->execute();
$log = $requete->fetch(PDO::FETCH_ASSOC);
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
      <nav class="">
        <h1><?=$log['title']?></h1>
        <div class="tooltip">
          <a href="mailto:tdllefeuvre@gmail.com" class="jello-horizontal btn-contact">
            <i style="padding-top:0.8rem; font-size:2rem;" class="fa fa-bell-o" aria-hidden="true"></a></i>
          <span class="tooltiptext">Me contacter</span>
        </div>
        <ul class="summaryclose">
          <li><a href="mailto:tdllefeuvre@gmail.com">Me contacter</a></li>
    		</ul>
    	</nav>
  		<div class="menu-icon">
        	<span></span>
      </div>
  </header>

<style>
.btn-connect {
    width: 20rem;
    display: inline;
    background-color: #ffffff;
    color:#000000;
    border: 0.1rem solid #000000;
    padding: 1rem;
}


.btn-connect:hover {
  background-color: #000000;
  color:#ffffff;
  border: 0.1rem solid #ffffff;
  transition: .2s;
}

</style>
<main>
  <article class="bloc-login">
    <form action="adminpage.php" method="POST">
      <p><?=$log['title2']?> :<input type="text"  name="username" class="input-color"></p>
      <p><?=$log['title3']?> :<input type="password" name="password" class="input-color"></p>
      <input type="submit" class="btn-connect" value="<?=$log['btnconnect']?>">
    </form>
  </article>
	