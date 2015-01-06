<?php

require_once '../vendor/twig/twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../template');
$twig = new Twig_Environment($loader, array(
    'cache' => '../vendor/twig/twig/cache'
));
echo $twig->render('main.twig', array('the' => 'variables', 'go' => 'here'));

//initialization
$user = new User();
$notes = new Note();
$db = new DB();
$tags = new Tag();

//request analyzer
Service::listenAction($user, $notes, $db,$tags );

//shows all notes of current user
$notes->getAllNotes();