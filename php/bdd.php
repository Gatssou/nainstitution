<?php
 class DB{
    private
    $host = 'localhost';
    private
    $username = 'root';
    private
    $passworld = '';
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

       try{ $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username,
        $this->pass, array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING    
));
       }catch(PDOException $e){
           die('<h1>impossible de se connecter  a la base de donnee</h1>');
       }
    }
}