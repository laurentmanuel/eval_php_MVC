<?php

//Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=ticket', 'root','root',
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


?>