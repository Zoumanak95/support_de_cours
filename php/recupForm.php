<?php

if($_POST){
    echo "<ul>";
    // pour récupérer les valeurs qui arrivent de 'entrainement.php, je fais appel à la superglobale $_POST
    // Comme $_GETet les autres superglobales, $_POST est un type array, d'où la syntaxe ci-dessous pour récupérer les valeurs avec 		l'indice entre []
        echo "<li>Prénom: $_POST[prenom]</li>";
        echo "<li>Description: $_POST[description]</li>";
        echo "<li>Année de naissance: $_POST[annee]</li>";
    echo "</ul>";

    $fichier = fopen('recupDonnees.txt','a');
    fwrite($fichier,"Prénom: " . $_POST['prenom'] . "\n");
    fwrite($fichier,"Déscription: " . $_POST['description'] . "\n");
    fwrite($fichier,"Année de naissance: " . $_POST['annee'] . "\n");
    // La ligne ci-dessous me sert de séparateur entre chaque nouvel envoi du formulaire par un nouvel utilisateur
    fwrite($fichier, "---------------------------\n");
    // fclose() va fermer le fichier, avec un argument, le ficier a fermer
    $fichier = fclose($fichier);
}