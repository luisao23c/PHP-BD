<?php
$servidor ="localhost";
$dbname ="Pruebas";
$username ="root";
$password ="";
try {
    $connection = new PDO("mysql:host=$servidor;dbname=$dbname",$username,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Hacemos algo
    echo "Conexion establecida";
    $sql = "SELECT * FROM fotos"; 
    $setencia=$connection->prepare($sql);
    $setencia->execute();
    $resultado = $setencia->fetchAll();
    foreach ( $resultado as $value){
      echo  $value["nombre"];
      echo  $value["url"];

    }
} catch (PDOException $error) {
    echo "Error: " .$error;
    // Podemos hacer algo aquí si ocurre una excepción

} 
?>