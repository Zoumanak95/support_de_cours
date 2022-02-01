<?php

session_start();

require_once('inc/header.inc.php');

$_SESSION['prenom'] = "Zoumana";
$_SESSION['staut'] = "utilisateur";

?>

<div>
    <button class='btn btn-primary my-2'><a class='text-light' href='pageCookie.php' target='_blank'>Aller vers la page des sessions</a></button>
</div>
