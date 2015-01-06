<?php
//initialization
require_once '../vendor/twig/twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('../template');
$twig = new Twig_Environment($loader, array(
    'cache' => '../vendor/twig/twig/cache'
));
$tags = new Tag();
$_SESSION['tags'] = (array)$_SESSION['tags'];
//----------------------------------------------------------------------------

// checks whether user wants to clear selected tags or to remove one
$tag->tagsCheck();

// SELECTING existing tags - Checks whether newly selected tag is already selected, if not - adds tag to session
// takes values from drop-down list

if ($_POST['tag']){ if ( !in_array($_POST['tag'], $_SESSION['tags']) )
    array_push($_SESSION['tags'],$_POST['tag']); $_POST['tag'] == null;}

//Takes values from TAGMAKER form and creates a new tag
if ($_POST['tag_name']){ $tags->createTag($_POST['tag_name'], $_SESSION['user']);}
//$_POST['tag_name']

// returns all available tags of current user
$all_tags = $tags->getAllTags();

//rendering
$users = [0 => ['username' => 'zero'], 'kkk' => ['username'=>'BOB'], 1 => ['username'=>'BILL']];
echo $twig->render('tag.twig', array('tags' => $all_tags, /*'selected'=>$selected_tags,*/'go' => 'here'));


