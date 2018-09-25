<?php

try {
  $bdd = new PDO('mysql:host=tdllffrcrkdatab.mysql.db;dbname=tdllffrcrkdatab', 'tdllffrcrkdatab', "**************");
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();

}

