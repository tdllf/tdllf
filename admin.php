<?php
$DEBUT = microtime(true);

require('connexion.php');

//try {
//  $bdd = new PDO('mysql:host=tdllffrcrkdatab.mysql.db;dbname=tdllffrcrkdatab', 'tdllffrcrkdatab', "Jssmbddejsne1995");
//} catch (PDOException $e) {
//    echo 'Connexion échouée : ' . $e->getMessage();

//}

//error_reporting(E_ALL);

$query = 'SELECT username, password FROM users';
$requete = $bdd->prepare($query);
$requete->execute(array('username' => $username, 'password' => $password));
$resultat = $requete->fetch(PDO::FETCH_ASSOC);
if($resultat['username'] == $_POST['username'] AND $resultat['password'] == $_POST['password']){
//echo '<p style="color:ffffff;">Requêtes réussies</p>';
}else{
header('location:login.php');
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
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="styletest.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
</head>
<body>
<header>
</header>

<!-- style="height:100rem;" -->
<main>

<!--
<div class="jumbotron">
  <h1 class="display-4">Bienvenue,</h1>
  <p class="lead">Vous êtes actuellement sur votre interface d'administration, ajoutez un nouvel article si vous avez une idée, ou un projet à présenter sur votre portfolio.</p>
  <hr class="my-4">
  <a class="btn btn-primary btn-lg" href="http://www.tdllf.fr" role="button">Retour à l'accueil</a>
</div>
-->

<!-- EFFACER style="margin-top:10rem;" -->
<div style="margin-top:10rem;" class="panel panel-default panel-primary text-center">
<div class="my-object hideclick panel-heading panel-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter un nouvel article</div>
<div style="display:none;" class="hideview panel-body">
<form method="POST" action="traitementarticle.php">
<div class="input-group">
<input type="text" class="form-control" name="ajouttitrearticle" placeholder="Titre de l'article">
</div>
<br>
<textarea class="form-control" name="ajoutdescriptionarticle" rows="5" cols="100"></textarea>
<br>
<button style="margin-left: 10px;" type="submit" class="btn btn-success pull-center">Ajouter</button>
</form>
</div>
</div>
</div>

<?php
$FIN = microtime(true);
$DUREE = $FIN - $DEBUT;
?>

<ul class="list-group">
  <li class="list-group-item list-group-item-primary">Page générée en : <?= $DUREE ?> ms.</li>
  <li class="list-group-item list-group-item-secondary">Page générée en : <?= $_SERVER["REQUEST_TIME"] ?> ms.</li>
  <li class="list-group-item list-group-item-primary">Page générée à <?= date('H:i:s')?>, le <?= date('d/m/Y') ?>.</li>
</ul>

<!--
<div class="list-group">
<a class="list-group-item list-group-item-action list-group-item-info" href="http://tdllf.fr">Retour à l'index</a>
</div>
-->

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
<script>
$('#hideclick').on('click', function(){
    $('#hideview').toggle();
    $('.hide_view').hide();
    $('.hideview').hide();
}); 

$('.hideclick').on('click', function(){
    $('.hideview').toggle();
    $('.hide_view').hide();
    $('#hideview').hide();
}); 

$('.hide_click').on('click', function(){
    $('.hide_view').toggle();
    $('#hideview').hide();
    $('.hideview').hide();
}); 
</script>