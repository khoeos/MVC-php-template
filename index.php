<?php
// Lance la session automqtiquement sur toute les pages
session_start();

// Définis le fuseau horraire sur celui de paris pour les fonctions date()
date_default_timezone_set('Europe/Paris');

// Va chercher le fichier qui contiendra toute les fonctions globales
require_once 'functions.php';

// Ajoute la base du html
include './layout/head.php';
include './layout/header.php';

// Le routeur qui va afficher la page correspondante à la requete
switch ($_SERVER['PATH_INFO']) {
    case '/':
    case '':
    case '/index':
        include './controller/index_controller.php';
        break;
    case '/dashboard':
        include './controller/dashboard_controller.php';
        break;

    default:
        include './controller/404.php';
        break;
}

// Ajoute le footer et ferme le html
include './layout/footer.php';