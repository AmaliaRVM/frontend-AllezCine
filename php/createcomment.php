<?php
require 'headersettings.php';
require 'pdo.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_GET['title_comment']) && isset($_GET['desc_comment']) && isset($_GET['movie_id'])){
    $req= $pdo -> prepare ('INSERT INTO `commentary_table` (movie_id, title_comment, desc_comment, pos_like_count, neg_like_count, creation_time) VALUES (:movie_id, :titleComment, :descComment, :posLikeCount, :negLikeCount, NOW())');
    $req -> execute ([
        ':movie_id' => htmlspecialchars(intval($_GET['movie_id'])),
        ':titleComment' => htmlspecialchars($_GET['title_comment']),
        ':descComment' => htmlspecialchars($_GET['desc_comment']),
        ':posLikeCount' => htmlspecialchars(intval($_GET['pos_like_count'])),
        ':negLikeCount' => htmlspecialchars(intval($_GET['neg_like_count']))
    ]);
    if(!$req){
        print json_encode('req error');
    }else{
        print json_encode($_GET);
    }
}else{
    echo 'error';
}

?>
