<?php

include "config.php";
echo "Połączenie z bazą MySQL" . PHP_EOL;

$db = new PDO('mysql:host=localhost;dbname=pdo_test;charset=utf8',  
    'pdo_test', pass, [
    	PDO::ATTR_EMULATE_PREPARES => false,  
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
);  

$wiek = 1;
$imie = "Pociek";

$stmt = $db->prepare("insert into dzieci (imie,wiek) values (:imie, :wiek)");
$stmt->execute([':imie' => $imie, ':wiek' => $wiek]);

var_dump($stmt);


// // $stmt = $db->query("select * from dzieci");
// $stmt = $db->prepare("select * from dzieci where wiek=:wiek or imie=:imie");
// $stmt->bindValue(':wiek', $wiek, PDO::PARAM_INT);
// $stmt->bindValue(':imie', $imie, PDO::PARAM_STR);
// $stmt->execute();

// // foreach ($stmt as $row) {
// // 	print_r($row);
// // }

// // $dane = $stmt->fetchAll(PDO::FETCH_ASSOC);
// $dane = $stmt->fetchAll(PDO::FETCH_OBJ);

// foreach ($dane as $row) {
// 	echo "{$row->imie} ma lat {$row->wiek}." . PHP_EOL;
// }

// echo $count = $stmt->rowCount();
// echo PHP_EOL;


// print_r($dane);