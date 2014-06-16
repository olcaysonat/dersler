<?php

require('includes/conn.php');


$un = $_POST['username'];
$pass = md5($_POST['password']);

$select = $conn->prepare("SELECT * FROM user WHERE username=:un AND password=:pass");
$select->execute(array(':un' => $un, ':pass'=> $pass));
$row = $select->fetch();


if(!empty($row)){
    $_SESSION['isLogged'] = "OK";
    echo "Giris Yapildi. Guvenli sayfalari gezebilirsiniz...";
}else{
    echo "Giris Yapilamadi";
}



/*$query=$conn->prepare("SELECT * FROM user WHERE username=:param AND password=:pass");
$query->bindParam(':param', $param);
$query->bindParam(':pass', $pass);
$query->execute();

$result = $query -> fetch();

print_r($result);*/
