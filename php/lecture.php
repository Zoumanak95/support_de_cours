<?php

// Je déclare une variable $nomFichier à laquelle j'affecte le fichier que je veux explorer 
$nomFichier = "recupDonnees.txt";
// File() est une fonction prédéfinie qui permet d'ouvrir un fichier et retourner son cocntenu sous la forme d'un tableau
// Je lui donne een paramètre mon fichier à explorer (affecter dans la viraible $nomFichier)
$folder = file($nomFichier);

echo "<pre>"; print_r($folder);
 echo "</pre>";


 foreach($folder as $lligne){
     echo $lligne . "<br>";

 }

 echo implode('/', $folder);