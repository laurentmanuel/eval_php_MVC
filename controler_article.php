<?php

//  http://localhost:8888/sandBox_php/evalPhp_MVC/controler_article.php

    include('vue_article.php');
    //tests variables par condition if (est-ce que "nom_article" existe (par isset) etc)
    if(isset($_POST['nom_article']) and isset($_POST['prix_article']) and !empty($_POST['nom_article']) and !empty($_POST['prix_article'])){

        //Déclaration variables
        $name=$_POST['nom_article'];
        $prix=$_POST['prix_article'];
        include('connect_bdd.php');
        include('model_article.php');
        echo "<h3>Vous avez rajouté l'article $name dont le prix est $prix.</h3>";

                    
    } else {
        echo "veuillez compléter tous les champs requis";
    }
?>