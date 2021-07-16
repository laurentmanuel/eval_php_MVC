<?php

try{

//Préparation de la requête SQL nous stockons dans une variable $req la requête à exécuter
$req = $bdd->prepare('insert into article(nom_article, prix_article) values (:nom_article, :prix_article)');

//ou 

//Exécution de la requête SQL création à l’aide d’un tableau qui va contenir le ou les paramètres à affecter à la requête SQL
$req->execute(array('nom_article' => $name, 'prix_article' => $prix));

//fermeture de la connexion à la bdd
$req->closeCursor();
}

catch(Exception $erreur){

//affichage d'une exception en cas d’erreur
die('Erreur : '.$erreur->getMessage());

}

?>