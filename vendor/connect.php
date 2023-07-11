<?php
$dbh = new \PDO('mysql:host=localhost;dbname=users', 'root', '');
$dbUsers = $dbh->query('SELECT * FROM users');
if(!$dbh){
    die('Error connect to DataBase');
}
