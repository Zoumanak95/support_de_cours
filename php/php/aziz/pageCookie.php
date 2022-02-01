<div>
    <a href="?pays=en"><img src="img/england.png" alt="drapeau de l'Angleterre"></a>
    <a href="?pays=es"><img src="img/spain.png" alt="drapeau de l'Espagne"></a>
    <a href="?pays=dz"><img src="img/algeria.png" alt="drapeau de l'Algérie"></a>
</div>

<?php

if (isset($_GET['pays'])) {
    $pays = $_GET['pays'];
} elseif (isset($_COOKIE['pays'])) {
    $pays = $_COOKIE['pays'];
} else {
    $pays = 'fr';
}

setcookie('pays', $pays, time() + 3600 * 24 * 365);

switch ($pays) {
    case 'fr':
        echo "<h1>Bonjour</h1>";
        break;

    case 'en':
        echo "<h1>Welcome</h1>";
        break;

    case 'es':
        echo "<h1>Hola</h1>";
        break;

    case 'dz':
        echo "<h1>Salaam</h1>";
        break;

    default:
        echo "<h1>Vous n'avez choisi aucune langue</h1>";
        break;
}
