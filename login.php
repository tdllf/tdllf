<?php

require('connexion.php');

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
        <h1></h1>
    	</nav>
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

.popup {
 border-radius: 1rem 1rem 1rem 1rem;
 width:20rem;
 height:2rem;
 opacity: 0.7;
 background-color:#ffffff; 
 color:#000000;
 z-index:2;
 position:absolute;
 top:10%;
 right:41%;
}

.popup {
 border-radius: 1rem 1rem 1rem 1rem;
 width:20rem;
 height:2rem;
 opacity: 0.7;
 background-color:#ffffff; 
 color:#000000;
 z-index:2;
 position:absolute;
 top:10%;
 right:41.5%;
}
</style>
<?php
if(isset($_GET['msg'])){
	echo "<p class='popup'> $_GET[msg]</p>";
}
?>
<main>
  <article class="bloc-login">
    <form action="admin.php" method="POST">
      <p><?=$log['title2']?> :<input type="text"  name="username" class="input-color"></p>
      <p><?=$log['title3']?> :<input type="password" name="password" class="input-color"></p>
      <input type="submit" class="btn-connect" value="<?=$log['btnconnect']?>">
    </form>
  </article>
</main>
<?php
$query = 'SELECT * FROM datafooter';	
$requete = $bdd->prepare($query);
$requete->execute();
$footer = $requete->fetch(PDO::FETCH_ASSOC);
?>

<footer>
  <div class="bloc-footer">
    <span><?=$footer['sentence']?> <span class="heart">♥</span> par </span><h6 class="footer-title" style="letter-spacing:0.1rem; color:white; padding-bottom:3rem;"><?=$footer['sentence2']?></h6>
    <a class="code" href="http://tdllf.fr">©</a><span> <?=$footer['rightsmention']?></span>
  </div>
</footer>
</body>
</html>
	