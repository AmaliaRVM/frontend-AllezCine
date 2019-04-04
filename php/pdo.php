<?php
try
    {
    // Connexion à la DB commentary via localhost. User n'a pas de mot de passe
        $pdo = new PDO('mysql:host=localhost;dbname=commentary;charset=utf8', 'user', 'user');
    }
catch(Exception $message){
    //message d'erreur en cas d'echec
    die('Erreur : '.$message->getMessage());
};
?>