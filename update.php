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
    $sql = "UPDATE `fotos` SET `nombre`='Juan Manolo',`url`='Manolo.png' WHERE `id`='1'"; 
    $connection->exec($sql);
} catch (PDOException $error) {
    echo "Error: " .$error;

} 
?>