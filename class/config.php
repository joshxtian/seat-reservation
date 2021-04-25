<?php
require_once "./php/init.php";
class config{
    private $user = 'root';
    private $password = 'Joshuaczsaturno99';
    public $pdo = null;

    public function con(){
        try{
            $this->pdo = new PDO('mysql:host=192.168.1.107;dbname=movie-reservation',$this->user,$this->password);
        }
        catch(PDOException $e){
            die($e);
        }
        return $this->pdo;
    }
}
?>