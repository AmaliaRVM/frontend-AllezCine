<?php
require 'headersettings.php';
require 'pdo.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if //condition de suppression (push button) //{
    $req= $pdo -> prepare ('DELETE IN`commentary_table`');
    $req -> execute ([ ]);
    if(!$req){
        print json_encode('req error');
    }else{
        print json_encode($_GET);
    }
}else{
    echo 'error';
}

?>
