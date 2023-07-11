<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Authorization</title>
</head>
<body>
 
<div class="container">
    <form enctype = "multipart/form-data" method = "POST" action = "vendor/signup.php">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Login</label>
        <input type="text" required name = "login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder = "Enter your login">
        <p class="text-danger"><?php echo $_SESSION['msglogin'];
                            unset($_SESSION['msglogin'])?></p>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" required name = "email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder = "Enter your email">
        <p class="text-danger"><?php echo $_SESSION['msgemail'];
                            unset($_SESSION['msgemail'])?></p>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Photo</label>
        <input type="file" required name = "file"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder = "Enter your email">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" required name = "password"  class="form-control" id="exampleInputPassword1" placeholder = "Enter your password">
        <p class="text-danger"><?php echo $_SESSION['passShort'];
                            unset($_SESSION['passShort'])?></p>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password confirmation</label>
        <input type="password" required name = "password_confirm"  class="form-control" id="exampleInputPassword1" placeholder = "Enter your password confirmation">
    </div>
    <p class="text-danger"><?php echo $_SESSION['msg'];
                            unset($_SESSION['msg'])?></p>
    <button type="submit" class="btn btn-primary">Sign up</button>

    <div id="emailHelp" class="form-text">You have an account ? <a href="index.php">Log in</a></div>

    </form>
</div>
<style>

.container{
    margin-top: 230px;
    max-width:450px
}
.container button{
    display:block;
    margin: 40px auto;
    margin-bottom: 15px;
}
.form-control{
    border:none;
    border-radius: 0;
    border-bottom: 1px solid black;
    outline:none;
}
</style>
</body>
</html>