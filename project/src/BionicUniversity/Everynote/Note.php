<?php
/**
 * Created by PhpStorm.
 * User: meraxes
 * Date: 24.11.14
 * Time: 18:36
 */

class Note {

    public function createNote($body, $author)

    {

        $created = date('Y-m-d H:i:s');
//echo 'INSERT INTO notes (created,modified) VALUES ('.$created.','.$created.');';

        //$db->sendQuery("INSERT INTO notes.notes VALUES ($body, $author, $created, 'null', 'null')");
                //$x = $db->sendQuery("INSERT INTO notes (body,author,book, created, modified) VALUES ('$body','$author','book', '$created', '$created' )");

        DB::doQuery("INSERT INTO notes (body,author,book, created, modified) VALUES ('$body','$author','planner', '$created', '$created')");
echo "INSERT INTO notes (body,author,book, created, modified) VALUES ('$body','$author','book', '$created', '' )";

    }

    public function getAllNotes(){

        $a = DB::doQuery("SELECT * FROM notes.notes WHERE author = '$_SESSION[user]'");

        $res = $a->fetchAll();

        foreach ( $res as $k => $v) {
            echo $v['author'].$v['body'].$v['created'].'<br>';
        }
    }

}