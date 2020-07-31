<?php

/**
 * Test twig 
 */
require __DIR__ . '/vendor/autoload.php';

//Routing 
$page = 'home';
if (isset($_GET['p'])) {
    $page = $_GET['p'];
}

// Récupère les derniers tutoriels 
function tutoriels () { 
    $pdo = new PDO('mysql:dbname=twig;host=mysql', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}

//Rendu du template
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader, ['cache' => false]); // __DIR__ . '/tmp'

switch ($page) {
    case 'contact':
        echo $twig->render('contact.twig');
        break;

    case 'home':
        echo $twig->render('home.twig');
        break;

    default:
        header('HTTP/1.0 404 Not Found');
        echo $twig->render('404.twig');
        break;
}
