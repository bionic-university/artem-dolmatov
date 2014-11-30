<?php
class DB extends PDO {

    private $db = '';
    private $abc = 'avs';
    public function __construct($dsn, $dbuser, $dbpwd ) {
        $this->db = new PDO ($dsn, $dbuser, $dbpwd);

    }
    public function getData($query)
    {
    $a = $this->db->query($query);
       return $a;
    }
} 