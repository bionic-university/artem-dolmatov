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

Service::redirectRequest();
include_once '../src/BionicUniversity/Everynote/Config/db_config.php';
$dba = new DB();

if (!empty($_POST['pwd'])) Service::login($dba);

echo $twig->render('login.twig', array('the' => 'variables', 'go' => 'here'));

$user = new User();
$note = new Note();

//echo $user->getUserId();
if ($_POST['logout']){Service::logout();}
if ($_SESSION['loggedin']) {unset($_POST['login'],$_POST['pwd']); echo 'LOGGED IN';} else echo 'Please login';


//$x = DB::doQuery('SELECT * FROM notes');
//$a = $x->fetchAll();
//foreach ($a as $k => $v) {
//    foreach ($v as $key => $val) echo $key.' => '.$val.'<br>';
//}

//echo $user->createUser($dba,'admin','admin@man.com','aaa');
//$note->createNote($dba,'New note 001',$user->getUserId());
$tag = new Tag();
$tag->createTag('newtag3');
$book = new Book();
$_SESSION['tags'] = (array)$_SESSION['tags'];
$book->createBook('newbook1');

$tag->tagsCheck();
if ($_POST['tag']){ if ( !in_array($_POST['tag'], $_SESSION['tags']) )
    array_push($_SESSION['tags'],$_POST['tag']);}

Service::loadSection();
var_dump($_POST);
var_dump($_SESSION);





