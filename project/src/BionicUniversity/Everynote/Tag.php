<?php

class Tag {
    public function createTag($tag_name, $note_id){

        if (self::checkDuplicateTag($tag_name) == 'duplicate found')  return;

        else {DB::doQuery("INSERT INTO tags (`name`,`author`) VALUES ('$tag_name','$_SESSION[user]')");}
    }

    public function checkDuplicateTag($tag_name){
        $result = DB::doQuery("SELECT name FROM tags WHERE name = '$tag_name' AND author = $_SESSION[user]");
        if ($result->rowCount() > 0 ) return 'duplicate found'; else return 'no duplicates';
    }
    public function removeTag($tag_name){
        $author = $_SESSION['user'];
        DB::doQuery("DELETE FROM tags WHERE name = '$tag_name' AND author = '$author'");
    }
    public function getAllTags(){

        $a = DB::doQuery("SELECT * FROM notes.tags WHERE author = '$_SESSION[user]'");

        return $res = $a->fetchAll();

//        foreach ( $res as $k => $v) {
//            echo $v['author'].$v['body'].$v['created'].'<br>';
//        }
    }

    public function clearTags(){
        $_SESSION['tags'] = null;
    }
    public function clearPreviousTag(){
        array_pop($_SESSION['tags']);
    }
    public function tagsCheck(){
        if ($_POST['clearPreviousTag']) { self::clearPreviousTag();$_POST['clearPreviousTag'] = null;}
        elseif ($_POST['clearTags']){ self::clearTags(); $_POST['clearTags'] = null;}
    }

    public function attachTagsToNote($note_id){

        foreach ($_SESSION['tags'] as $tag_id){
            echo 'tag-id: '.$tag_id." </br>";
            DB::doQuery("INSERT INTO notestags (note,author,tag) VALUES ('$note_id','$_SESSION[user]','$tag_id')");}
        $_SESSION['tags']= null;
    }

    public function getAllSelectedTagNamesById(){
        $selected_tags = [];
        foreach ($_SESSION['tags'] as $selected_tag_id) {
            foreach (self::getAllTags() as $tag)
                { if ($tag['id'] == $selected_tag_id) {
                    array_push($selected_tags,$tag['name']);}
                }
        }
        return $selected_tags;
    }
} 