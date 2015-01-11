<?php
class DB extends PDO {

    private $db = '';
public static $datab = '';
    public function __construct($dsn=false, $dbuser=false, $dbpwd=false ) {
        if (!$dsn || !$dbuser || !$dbpwd)
        $this->db = new PDO (DBHOST.DBNAME, DBUSER, DBPWD);
        else $this->db = new PDO ($dbhost.$dbname, $dbuser, $dbpwd);
    }
    public function sendQuery($query)
    {
    $a = $this->db->query($query);
       return $a;
    }


    public static function connect($dsn=false, $dbuser=false, $dbpwd=false ) {
        if (!$dsn || !$dbuser || !$dbpwd)
            Self::$datab = new PDO (DBHOST.DBNAME, DBUSER, DBPWD);
        else Self::$datab = new PDO ($dbhost.$dbname, $dbuser, $dbpwd);
    }
    public static function doQuery($query)
    {
        Self::connect();
        $a = Self::$datab->query($query);
        return $a;
    }

    public static function doTransaction($query,$query2 = false,$query3 = false)
    {
        Self::connect();
        $z = new Self;
        $z->beginTransaction();
        $z->exec($query);
        if ($query2) {$a = $z->exec($query2);}
        if ($query3) {$a = $z->exec($query3);}
        $z->commit();

        return $a;
    }

    public static function searcher(){

        Self::connect();
        $query = "SELECT * FROM `notes` WHERE `body` LIKE '%$word%';";
        $a = Self::$datab->query($query);





    }
} 