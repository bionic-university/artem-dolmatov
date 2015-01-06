<?php
require_once '../vendor/twig/twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../template');
$twig = new Twig_Environment($loader, array(
    'cache' => null
));

if (!empty($_POST['logout'])){Service::logout();echo 'PLEASE LOG IN '; }

elseif (!empty($_POST['pwd']) && !empty($_POST['login'])) {Service::login($dba); }

if (!$_SESSION['loggedin']) {echo ' PLEASE LOG IN'.$twig->render('login.twig', array('the' => 'variables', 'go' => 'here')); }

if ($_SESSION['loggedin'])
    {   echo $twig->render('logout.twig', array('the' => 'variables', 'go' => 'here'));
        require_once '../src/BionicUniversity/Everynote/Controller/tagController.php';
    }
