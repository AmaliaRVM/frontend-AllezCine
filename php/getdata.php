<?php 

    $sql = ('SELECT * FROM commentary_table');
    $result = $pdo->query($sql);
    $rows = array();
    while($r = $result->fetch(PDO::FETCH_ASSOC)) {
        array_push($rows, $r);
    }
    
    // Tableau en json
    print json_encode($rows);

?>