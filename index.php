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
    <form action = "vendor/logIn.php" method = "POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Login</label>
        <input type="text" name = "login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder = "Enter your login">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name = "password" class="form-control" id="exampleInputPassword1" placeholder = "Enter your password">
    </div>

    <button type="submit" class="btn btn-primary">Log in</button>

    <div id="emailHelp" class="form-text">You don't have an account ?  <a href="register.php"> Sign up</a></div>

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