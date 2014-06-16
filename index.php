<?php
include 'includes/config.php';

include "views/menu.php";

if(!empty($_GET['page'])){
switch($_GET['page'])
{
    case 'login':
            include 'pages/login.php';
        break;

    case 'userRegistration':
        include 'pages/userRegistration.php';

        break;

    case 'securePage':
        if($_SESSION['isLogged'] == "OK"){
            include 'pages/securePage.php';
        }else{
            echo "GIRIS IZNINIZ YOK!!";
        }
        break;

    case 'logout':
        unset($_SESSION['isLogged']);
        break;

    case 'loginProcess':
        include 'pages/loginProcess.php';
        break;

    default:

}

}
