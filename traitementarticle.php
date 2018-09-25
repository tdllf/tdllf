<?php

require('connexion.php');

$query = 'SELECT username, password FROM users';
$requete = $bdd->prepare($query);
$requete->execute(array('username' => $username, 'password' => $password));
$resultat = $requete->fetch(PDO::FETCH_ASSOC);
if($resultat['username'] == $_POST['username'] AND $resultat['password'] == $_POST['password'])
{
echo '<p style="color:ffffff;">Requêtes réussies</p>';
}

$titre = $_POST['ajouttitrearticle'];
$description = $_POST['ajoutdescriptionarticle'];

$ajout = $bdd->prepare(
	"INSERT INTO article (title, description, date_insert)
	VALUES (?,?, NOW())"
  );
 
$ajout->bindValue(1, $titre, PDO::PARAM_STR);
$ajout->bindValue(2, $description, PDO::PARAM_STR);
$result_ajout = $ajout->execute();


if($result_ajout === true){
$msg = 'Requête réussie';
}else{
$msg = 'Echec de la requête';
}
header('location:login.php?msg='.$msg);



//if($result_ajout === true){
//$msg = '<p class="popup" style=">Requête réussie</p>';
//}else{
//$msg = '<p class="popup">Echec de la requête</p>';
//}
//header('location:login.php?msg='.$msg);


//var_dump($result_ajout);
//$affiche = $bdd->prepare(
//	"SELECT title, content, date FROM article WHERE id=6");
//$affiche->execute();
//$res = $affiche->fetchAll(PDO::FETCH_ASSOC);
//var_dump($res);
 




 ?>
