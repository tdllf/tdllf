<?php
try {
  $bdd = new PDO('mysql:host=tdllffrcrkdatab.mysql.db;dbname=tdllffrcrkdatab', 'tdllffrcrkdatab', "Jssmbddejsne1995");
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();

}

$query = 'SELECT * FROM data1';	
$requete = $bdd->prepare($query);
$requete->execute();
$resultat = $requete->fetch(PDO::FETCH_ASSOC);


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
    <link href="https://github.com/necolas/normalize.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Mr+Dafoe" rel="stylesheet">
	  <link rel="stylesheet" href="styletest.css">
</head>
<body>
<header>
    <nav>
      <div class="tooltip">
        <a href="mailto:tdllefeuvre@gmail.com" class="jello-horizontal btn-contact">
          <i style="padding-top:0.8rem; font-size:2rem;" class="fa fa-bell-o" aria-hidden="true"></i>
        </a>
        <span class="tooltiptext">Me contacter</span>
      </div>
      <ul class="summaryclose">
        <li><a href="#compétences">Compétences</a></li>
        <li><a href="#fiche-tech">Fiche technique</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="mailto:tdllefeuvre@gmail.com">Par mail</a></li>
       </ul>
     </nav>
    <div class="menu-icon">
      	<span></span>
    </div>
</header>
<main>
  <article class="bloc-intro">
  <img class="photo" src="<?= $resultat['picture'] ?>" alt="Photo de profil">
  <h2><?= $resultat['username'] ?> Développeur Intégrateur Web</h2>

    <ul class="presentation">
      <li><a href="<?= $resultat['linkin'] ?>" target="_blank" class="social-link-in"><?= $resultat['linkdescription1'] ?> <i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
      <li><a href="<?= $resultat['linkcv'] ?>" target="_blank" class="social-link-in"><?= $resultat['linkdescription2'] ?></a></li>
    </ul>

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
    <span class="code">©</span><span> <?=$footer['rightsmention']?> réservés.</span>
  </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/menu.js"></script>
</body>
</html>
	