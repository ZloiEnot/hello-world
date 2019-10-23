<?php

// Кнопка выйти

if(isset($_GET['out'])){
    $user = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM `users` WHERE `login` = '".$_COOKIE['user']."' "));
    setcookie('user', $user['login'], time()-3600*24,"/");
    header("Location: /index.php");exit();
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Робота</title>

    <!-- link bootstrap and css-->

    <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css">

    <!-- link js-->

    <script type="text/javascript" src="assets/css/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/css/bootstrap/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/css/bootstrap/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<!-- Header -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="/index.php">Палєєв В.</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/chat.php">Чат</a>
            </li>
        </ul>
        <div class="ml-auto">
            <?php
            // Если польз. вошел  - выводим логин и кнопку выйти
            // Если польз. не вошел либо зарег., то выводим ссылку на вход и регистр.
            $user = $_COOKIE['user'];
            if($user==''){
                echo '<a href="/login.php" class="btn btn-dark">Вход</a><span class="flesh"> | </span><a href="/registration.php" class="btn btn-dark">Регистрация</a>';
            }else{
                echo '<a class="btn btn-dark"><span class="flesh"> '.$user.'  </span></a><a href="/index.php?out" class="btn btn-dark"><span class="flesh">Выйти</span></a>';
            };
            ?>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 headerFonHeader"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="frameAll">
