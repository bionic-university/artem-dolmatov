<?php
/**
 * Created by PhpStorm.
 * User: meraxes
 * Date: 24.11.14
 * Time: 18:37
 */

class Book {

    public function createBook($book_name){
        $author = $_SESSION['user'];

        if (self::checkDuplicateBooks($book_name,$author) == 'no duplicates')
        { DB::doQuery("INSERT INTO books (name, author) VALUES ('$book_name','$author')");}
        echo ("INSERT INTO books (name, author) VALUES ('$book_name','$author')");

    }
    public function checkDuplicateBooks($book_name, $author){
        $result = DB::doQuery("SELECT name FROM books WHERE name = '$book_name' AND author = '$author'");
        if ($result->rowCount() > 0 ) return 'duplicate found'; else return 'no duplicates';
    }
    public function removeBook($book_name){
        DB::doQuery("DELETE FROM books WHERE name = '$book_name' AND author = '$author'");
    }

} 