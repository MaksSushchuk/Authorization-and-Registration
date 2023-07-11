<?php

require_once 'connect.php';

foreach($dbUsers as $user){
    if($_POST['login'] === $user['login'] && $_POST['password'] === $user['password']){

        $query = "SELECT * FROM `users` WHERE login = :login";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':login', $_POST["login"]);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        include __DIR__ . '/../autorized.php';
    }
    else{

    }
}
