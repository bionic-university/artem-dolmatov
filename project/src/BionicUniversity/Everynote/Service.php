<?php
/**
 * Created by PhpStorm.
 * User: meraxes
 * Date: 13.12.14
 * Time: 18:17
 */

class service
{
    static function validate()
    {


    }

    static function loadSection()
    {
        if ($_POST['tag'] || $_POST['clearTags'] || $_POST['clearPreviousTag']) require '../src/BionicUniversity/Everynote/Controller/noteController.php';
        if ($_SESSION['loggedin']) require '../src/BionicUniversity/Everynote/Controller/mainController.php';
    }

    static function redirectRequest()
    {


    }

    static function login($db)
    {
        $pwd = crypt($_POST['pwd'],'$1$');
        $arr = $db->sendQuery("SELECT * FROM notes.users WHERE name = '$_POST[login]' AND pwd = '$pwd' ");
        if ($arr->rowCount() == 1) {
            $res = $arr->fetch();

            echo '<br> Welcome!' . $res['id'] . " " . $res['name'];
            $_SESSION['loggedin'] = true;
            $_SESSION['user'] = $res['id'];
        } else {
            echo ' incorrect user or password';
        }


    }

    static function logout(){
        $_SESSION['loggedin'] = null;
        $_SESSION['user'] = null;
    }

    static function addTemplateLoader($twig){

    }

    static function listenAction($user, $note, $dba){
        //if ($_POST['addnote']) {$note->createNote($dba,'New note 001',$user->getUserId());}
        if ($_POST['addnote']) { require_once '../src/BionicUniversity/Everynote/Controller/noteController.php'; $_POST['addnote'] = null;}
        if ($_POST['body']) { $note->createNote($_POST['body'],$user->getUserId()); $_POST['body'] = null;}
    }

}