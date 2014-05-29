<?php
session_start();

$config = array(
  'userName' => 'admin',
  'password' =>'123321'
);

$menu = array(
    'Anasayfa' => 'index.php',
    'Giris Yap' => 'index.php?page=login',
    'Guvenli Sayfa' => 'index.php?page=securePage'
);