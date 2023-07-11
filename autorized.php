<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Auto</title>
</head>
<body>
    <?php

    ?>
<div class="container">
<div class="img"><img src="<?php echo '/img/' . $result[0]['avatar']; ?>" alt=""></div>
<div class="text"><h3 class = 'login'><?=$result[0]['login']?></h3>
<p class="email"><?=$result[0]['email']?></p></div>

</div>

<style>
.container{
    margin-top: 200px;
    width: 500px;
    height: 600px;
    display: flex;   
    justify-content: space-between;
}
.login{
}
.container .img{
    width: 60%;
    height: 70%;

}
.img img{
    width: 100%;
    height: 100%;

}
</style>
</body>
</html>