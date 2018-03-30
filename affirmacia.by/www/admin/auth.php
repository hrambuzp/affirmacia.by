<?php

session_start();
  require_once "../function.php";
include('../config.php');
include('../connect.php');

?>

<!DOCTYPE html>
<html>
<head lang="ru">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <title> Вход в Admin-панель</title>
  <!-- Import main styles -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/addit.css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
  <!--[if lt IE 10]>
<link rel="stylesheet" href="assets/css/ie.css">
<![endif]-->
</head>
<body>
<div class="wrapper">
<div class="content">
<header class="site-headers">
  <nav class="site-nav">
    <div class="container "><p>тел. +375 29 5766666</p>
      <a href="#!">
        <img  class="logo" src="../assets/img/logoaff2.png" alt="Аффирмация">
      </a>
      <span class="main-nav-trigger trigger-nav">&#9776;</span>
      <ul class="horizontal-nav trigger-victim">
             
           </ul>     
      </div><!--//.container-->
  </nav><!--//.site-nav-->
<div class="container ">
<div class="row">

      <div class="col-md-12 centr">
      <form action="../admin/index_admin.php" name="auth" method="post">
<div class="col-md-8 ctn-right">

        <label for="mail"> Ваш login</label>
<input   name="login" type="text" class="frm-control">
<label for="mail"> Ваш password</label>
<input   name="password" type="password" class="frm-control"><br><br>


<input type="submit" name="button_auth" class="btn-submit" value="Войти">    
</form>
 </div>     
      
</div><!--//.container-->
</header>
</div><!--//.content-->
  <footer class="site-footer">
  <div class="container">
  <div class="row">
   
    
    
    <div class="col-md-6" >
    </div>
<div class="col-md-6 ">
    <p class="copyright">  "Аффирмация" 2017 &copy</p>
    </div>
  </div><!--//.container-->
</footer><!--//.site-footer-->
<!--Import jQuery-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- jQuery for older IE -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Site Sripts -->
  <script src="assets/js/functions.js"></script>
</div><!--//.wrapper-->
</body>
</html>