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
//TODO save entered text when adding tag - postpone

    //    $new_note = DB::doQuery("INSERT INTO notes (body,author,book, created, modified) VALUES ('$body','$author','planner', '$created', '$created'); SELECT id FROM notes ORDER BY id DESC LIMIT 1;");
        DB::doQuery("INSERT INTO notes (body,author,book, created, modified) VALUES ('$body','$author','planner', '$created', '$created');");
        $new_note = DB::doQuery("SELECT id FROM notes ORDER BY id DESC LIMIT 1");
        $res = $new_note->fetchAll();
//echo "INSERT INTO notes (body,author,book, created, modified) VALUES ('$body','$author','book', '$created', '' )";
        if ($res) return $res;

    }

    public function getAllNotes(){

        $notes = DB::doQuery("SELECT * FROM notes.notes WHERE author = '$_SESSION[user]'");
        $fetched_notes = $notes->fetchAll();

        $notestags = DB::doQuery("SELECT * FROM notes.notestags WHERE author = '$_SESSION[user]'");
        $fetched_notestags = $notestags->fetchAll();

        $tags = DB::doQuery("SELECT * FROM notes.tags WHERE author = '$_SESSION[user]'");
        $fetched_tags = $tags->fetchAll();

//        var_dump($fetched_tags);
//        var_dump($fetched_notes);
//        var_dump($fetched_notestags);



        foreach ( $fetched_notes as $single_note_array){
        echo /*$single_note_array['id'] . $single_note_array['author'] .*/ ' | ' . $single_note_array['body'] . ' - ' . $$single_note_array['created'];

        foreach ($fetched_notestags as $single_notetag_array) {
            if ($single_notetag_array['note'] == $single_note_array['id']) {

                foreach ($fetched_tags as $single_tag_array) {if ($single_tag_array['id']== $single_notetag_array['tag'])  echo ' '.$single_tag_array['name'].' ';}

        }
        }

            echo '|<br>';}

}
}