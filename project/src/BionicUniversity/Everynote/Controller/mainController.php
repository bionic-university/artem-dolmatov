<?php

require_once '../vendor/twig/twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../template');
$twig = new Twig_Environment($loader, array(
    'cache' => '../vendor/twig/twig/cache'
));
echo $twig->render('main.twig', array('the' => 'variables', 'go' => 'here'));

$user = new User();
$notes = new Note();
$db = new DB();
Service::listenAction($user, $notes, $db);
$notes->getAllNotes();