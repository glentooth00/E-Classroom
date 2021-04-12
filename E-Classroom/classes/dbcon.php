<?php 

class Dbh{

    public $host = 'localhost';
    public $dbname = 'eschool';
    public $user = 'root';
    public $pwd = '';


    public function connection(){

        $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;
        $pdo = new PDO($dsn,$this->user,$this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        

        // if($pdo){
        //     echo 'Connected';
        // }

        return $pdo;

    }

}

$obj = new Dbh;

$obj->connection();




?>

