<?php 

$host='localhost';
$user='root';
$pass='';

try{

    $conn = new PDO ("mysql:host=$host" , $user, $pass );
    $sql='Database created test3B';
    $conn -> exec($sql);
    echo "Database is created";
}

catch(Exception $e){
    echo "Database not created, something went wrong";
}


?>