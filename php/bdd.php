<?php
 class BDD{
    private
    $host = 'localhost';
    private
    $user = 'root';
    private
    $password = '';
    private
    $database = 'nains';
   public
    $bdd ;

    public function __construct($host = null, $user = null, $password = null, $database = null){
        if($host != null){
            $this->host = $host;
            $this->user = $user;
            $this->password = $password;
            $this->database = $database;
        }

       try{ $this->bdd = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->user,
        $this->password, array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING    
));
       }catch(PDOException $e){
           die('<h1>impossible de se connecter  a la base de donnee</h1>');
       }
    }
}