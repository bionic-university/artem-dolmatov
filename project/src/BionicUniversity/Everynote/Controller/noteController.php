<?php
require_once '../vendor/twig/twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../template');
$twig = new Twig_Environment($loader, array(
    'cache' => '../vendor/twig/twig/cache'
));

//loads all tags of current user to drop-down list
$tags = new Tag();
$all_tags = $tags->getAllTags();

//shows currently selected tags that will be attached to new note
$selected_tags = $tags->getAllSelectedTagNamesById();

//render
$users = [0 => ['username' => 'zero'], 'kkk' => ['username'=>'BOB'], 1 => ['username'=>'BILL']];
echo $twig->render('note.twig', array('tags' => $all_tags, 'selected'=>$selected_tags,'go' => 'here'));
