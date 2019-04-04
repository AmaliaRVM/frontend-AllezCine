<?php

    $stmt = $pdo->prepare("INSERT INTO commentary (title_commentary, desc_commentary) VALUES (:commentTitle , :commentDesc)");
    $titleComment = $_GET['commentTitle'];
    $descComment = $_GET['commentDesc'];
    $stmt->execute([
        'commentTitle' => $titleComment,
        'commentDesc' => $descComment
    ]);
    print json_encode($_GET);

?>