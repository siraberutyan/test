<?php


$dsn = 'mysql:host=localhost;dbname=blog_app;charset=utf8';
$user = 'blog_user';
$pass = 'root';

$dbh = new PDO($dsn, $user, $pass);

var_dump($dbh);
?>