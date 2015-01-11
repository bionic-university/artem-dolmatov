<?php
/**
 * Created by PhpStorm.
 * User: meraxes
 * Date: 07.12.14
 * Time: 20:24
 */

class User
{
    public $db;
    private $id;
    public function createUser(DB $db, $name, $email,$pwd,$fname=null, $lname=null)

    {   $this->db = $db;
        foreach ($db->sendQuery("SELECT * from notes.users") as $k => $v) {
          if ($v['name'] == $name) {return "Username $name is already taken "; };
            if ($v['email'] == $email) {return "Email $email is already taken "; };
        };

        $pwd = crypt($pwd,'$1$');
        $db->sendQuery("INSERT INTO notes.users (`name`,`pwd`,`email`,`fname`,`lname`) VALUES ('$name','$pwd','$email', '$fname', '$lname' );");
        $this->id = $db->sendQuery("SELECT id FROM notes.users WHERE name = '$name'; ");
        return "User  $name was registered successfully";
    }
    public function getUserId()

    {



        return $_SESSION['user'];
    }
}