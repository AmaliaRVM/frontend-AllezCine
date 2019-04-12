<?php 

require ('headersettings.php');
require ('pdo.php');

if (isset($_GET['movie_id'])){
    $req= $pdo -> prepare ('SELECT * FROM `commentary_table` WHERE movie_id=:Id');
    $req -> execute ([':Id' => htmlspecialchars($_GET['movie_id'])]);
}
$rows = array();
    while($r = $req->fetch(PDO::FETCH_ASSOC)){
        array_push($rows, $r);
    }
print json_encode($rows);

?>