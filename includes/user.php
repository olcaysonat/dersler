<?php

require('conn.php');

if($_POST['save']){
 if($_POST['username'] && $_POST['firstname'] && $_POST['lastname'] && $_POST['email'] && $_POST['password']){
     $sql = $conn->prepare('INSERT INTO user (username,firstname,lastname,email,password) VALUES (:username,:firstname,:lastname,:email,:password)');
     $insert = $sql->execute(array(
         ':username' => $_POST['username'],
         ':firstname' => $_POST['firstname'],
         ':lastname' => $_POST['lastname'],
         ':email' => $_POST['email'],
         ':password' => md5($_POST['password']),
     ));

     if($insert){
         echo 'Kayit eklendi.';
     }else{
         echo 'Kayit eklenemedi.';
     }
 }else{
     echo 'Tum alanlari doldurunuz.';
 }
}