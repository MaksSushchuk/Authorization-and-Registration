<?php
session_start();
require_once 'connect.php';
$login = $_POST['login'];
$email = $_POST['email'];
$fileName = $_FILES['file']['name'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
$filePath = __DIR__ . '/../img/' . $fileName;
move_uploaded_file($_FILES['file']['tmp_name'], $filePath);

foreach($dbUsers as $user){
    echo $user['login'] . '<br>';
    if($login == $user['login']){
    $_SESSION['msglogin'] = 'This login is already taken';
    return header('Location:/../register.php');
    }
    elseif($email == $user['email']){
        $_SESSION['msgemail'] = 'This email is already taken';
    return header('Location:/../register.php');
    }
}

if(mb_strlen($password) >= 8 &&  $password === $password_confirm){
    
    header('Location:/../index.php');
    $dbh->query("INSERT INTO `users` (`id`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$login', '$email', '$password', '$fileName')");
}

elseif ($password != $password_confirm) {
    $_SESSION['msg'] = 'Passwords do not match';
    header('Location:/../register.php');
}

elseif (mb_strlen($password) < 8) {
    $_SESSION['passShort'] = 'Password less than 8 characters';
    header('Location:/../register.php');
}
