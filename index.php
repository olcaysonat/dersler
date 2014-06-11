test
<?php
include 'includes/config.php';

include "views/menu.php";
switch($_GET['page'])
{
    case 'login':
            include 'pages/login.php';
        break;

    case 'pages':

        break;

    case 'securePage':
        if($_SESSION['isLogged'] == "OK")
        {
            include 'pages/securePage.php';
        }else{
            echo "GIRIS IZNINIZ YOK!!";
        }
        break;
    case 'logout':
        unset($_SESSION['isLogged']);
        break;
    case 'loginProcess':
        if($_POST['username'] == $config['userName'] && $_POST['password'] == $config['password'])
        {
            $_SESSION['isLogged'] = "OK";
            echo "Giris Yapildi. Guvenli sayfalari gezebilirsiniz...";
        }else{
            echo "Giris Yapilamadi";
        }
        break;

    default:

}
