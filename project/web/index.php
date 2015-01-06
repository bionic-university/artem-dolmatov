<?php
spl_autoload_register(function ($class) {
    include '../src/BionicUniversity/Everynote/' . $class . '.php';
});

session_start();
require_once '../vendor/twig/twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../template');
$twig = new Twig_Environment($loader, array(
    'cache' => null
));

//Service::redirectRequest();

include_once '../src/BionicUniversity/Everynote/Config/db_config.php';
$dba = new DB();
$user = new User();
$note = new Note();
$tag = new Tag();
$book = new Book();

//echo $user->getUserId();
require '../src/BionicUniversity/Everynote/Controller/authorizeController.php';
//require_once '../src/BionicUniversity/Everynote/Controller/serviceController.php';

//$x = DB::doQuery('SELECT * FROM notes');
//$a = $x->fetchAll();
//foreach ($a as $k => $v) {
//    foreach ($v as $key => $val) echo $key.' => '.$val.'<br>';
//}
//echo $user->createUser($dba,'admin','admin@man.com','aaa');
//$note->createNote($dba,'New note 001',$user->getUserId());
//$tag->createTag('newtag3');


Service::loadSection();
