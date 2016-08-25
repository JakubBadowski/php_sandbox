<?php

require "config.php";

echo "Test of Transaction" . PHP_EOL;

try {
	$db = new PDO('mysql:host=localhost;dbname=pdo_test;charset=UTF8',  
	    'pdo_test', pass, [
    		PDO::ATTR_EMULATE_PREPARES => false,  
        	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    	]
	);  

	echo "Połączono z bazą" . PHP_EOL;
} catch (PDOException $e) {
	exit("Połączenie z bazą nie powiodło się!");
}

try {  
    $db->beginTransaction();  
  
    $stmt = $db->prepare("UPDATE dzieci SET wiek=10 WHERE id=:id");  
    $stmt->execute([':id'=>1]);  
  
    $stmt = $db->prepare("UPDATE dzieci SET wiek=4 WHERE id=:id");  
    $stmt->execute(array(':id'=>12));  
  
    $db->commit();  
} catch(PDOException $e) {  
    $db->rollBack();  
    return $e;  
} 
