<?php
 class DB{
    private
    $host = 'localhost';
    private
    $username = 'root';
    private
    $password = '';
    private
    $database = 'nains';
   public
    $db ;

    public function __construct($host = null, $user = null, $password = null, $database = null){
        if($host != null){
            $this->host = $host;
            $this->user = $user;
            $this->password = $password;
            $this->database = $database;
        }

       try{ $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username,
        $this->password, array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING    
));
       }catch(PDOException $e){
           die('<h1>impossible de se connecter  a la base de donnee</h1>');
       }
    }
}