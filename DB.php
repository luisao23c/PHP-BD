<?php
$_POST["id"] = 1;
$_POST["name"] ="Angel";
$_POST["description"]=" es una persona interesante";
class DB {
public $servidor ="localhost";
public $dbname ="Pruebas";
public $username ="root";
public $password ="";
public $connection ="";
    function __construct() {
        $this->connection = new PDO("mysql:host=$this->servidor;dbname=$this->dbname",$this->username,$this->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexion establecida";
      }// Declaración de una propiedad    
      function add_update_delete($sql) {
        $this->connection->exec($sql);

    } function get($sql){
       $setence =$this->connection->prepare($sql);
       $setence->execute();
       return $setence->fetchAll();
       
    }
    
}
?>