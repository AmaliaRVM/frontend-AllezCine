<?php

    $stmt = $pdo->prepare("DELETE FROM `commentary` WHERE id=:id"); 
    $removeid = $_GET['id'];
    $stmt->execute([
        'id' => $removeid,
    ]);

?>
