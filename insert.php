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
    $sql = "INSERT INTO `fotos`(`nombre`,`url`) VALUES(' Javier Alonzo','Javi.jpg')"; 
    $connection->exec($sql);
} catch (PDOException $error) {
    echo "Error: " .$error;

} 
?>