<?php
$host='localhost';
$db = 'commentary';
$username = 'root';
$password = 'root';
$charset = 'utf8';


$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try{

    $pdo = new PDO($dsn, $username, $password);

} catch (PDOException $e){
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}

?>