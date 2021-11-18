<?php
 class DB{
    private
    $host = 'localhost';
    private
    $user = 'root';
    private
    $pass = '';
    private
    $database = 'nains';
   public
    $db ;

    public function __construct($host = null, $user = null, $pass = null, $database = null){
        if($host != null){
            $this->host = $host;
            $this->user = $user;
            $this->pass = $pass;
            $this->database = $database;
        }

       try{ $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->user,
        $this->pass, array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING    
));