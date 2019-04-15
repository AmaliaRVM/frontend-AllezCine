<?php
require 'headersettings.php';
require 'pdo.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset ($_GET['movie_id']) && isset ($_GET['id']) && isset ($_GET['delete_button'])){
    $req= $pdo -> prepare ('DELETE FROM`commentary_table` WHERE id=:Id');
    $req -> execute ([':Id' => htmlspecialchars($_GET['id'])]);
    if(!$req){
        print json_encode('req error');
    }else{
        print "Commentary removed";
    }
}else{
    echo 'Can\'t delete!!';
}

?>
