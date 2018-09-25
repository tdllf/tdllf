<?php

//$DBhost  = "tdllffrcrkdatab.mysql.db";
//$DBowner = "tdllffrcrkdatab";
//$DBpw    = "Jssmbddejsne1995";

try {
  $bdd = new PDO('mysql:host=tdllffrcrkdatab.mysql.db;dbname=tdllffrcrkdatab', 'tdllffrcrkdatab', "Jssmbddejsne1995");
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();

}

