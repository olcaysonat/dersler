<?php

try{
    $conn = new PDO('mysql:host=localhost; dbname=dersler','root','');
}catch(PDOException $e){
    echo 'Connection failed:' . $e->getMessage();
}