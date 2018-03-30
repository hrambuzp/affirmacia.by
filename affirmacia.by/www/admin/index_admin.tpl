<?php


  require_once "start.php";

?>

<!DOCTYPE html>
<html>
<head lang="ru">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Admin-панель</title>
 
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/addit.css">
 
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

      <div class="container">
    <div class="row ctn">
      <div class="col-md-4 ctn-left adm">
      <span><h2 class="stn-heading ">Панель администратора</h2></span><br>
<h3> Мероприятие</h3>
<a href="index_admin.php"><h4>Добавить</h4></a>
<a href="meet_del.php"><h4>Удалить</h4></a>
<br>
<h3>Тренер</h3>
<a href="coach_add.php"><h4>Добавить</h4></a>
<a href="coach_del.php"><h4>Удалить</h4></a>
<br>
      </div>
      <div class="col-md-8 ctn-right adm"><h2>Добавить мероприятие</h2>
      <form action="" method="post">
        <div class="frm-group">
        <label for="name">Название мероприятия</label>
<input  id="name" type="text" name="name" class="frm-control">
        <label for="date">Дата проведения в формате 2017-12-31</label>
<input   type="date" name="date" class="frm-control">
        <label for="">Дата проведения для вывода - например: 1 сентября</label>
<input   type="text" name="datestring" class="frm-control">
<label for="">Время проведения мероприятия (00:00)</label>
<input   type="text" name="time" class="frm-control">
<label for="">Стоимость (00)</label>
<input   type="text" name="cost" class="frm-control">
<label for="">Стоимость для вывода (00 byn)</label>
<input   type="text" name="coststring" class="frm-control">
<label for="">Текст программы мероприятия</label>
 <textarea name="annotation" class="frm-control" rows="7"></textarea>
<label for="">Изображение</label>
<input   type="text" name="img" class="frm-control">
<label for="">Выберите ID услуги</label>
<select  name="serv" class="frm-control">
  <option value="1">Тренинг 1</option>
  <option value="2">Семинар 2</option>
  <option value="3">Мастер-класс 3</option>
</select>
<label for="">Выберите категорию</label>
<select name="servcat" class="frm-control">
  <option value="1">Для женщин 1</option>
  <option value="2">Ораторские 2</option>
  <option value="3">Для руководителей 3</option>
  <option value="4">Контроль эмоций 4</option>
  <option value="5">Секрет харизмы 5</option>
  <option value="6">Приемы лидерства 6</option>
  </select>
<label for="">Выберите тренера</label>
<select name="coach" class="frm-control">
  <option value="1">Андрей Громов 1</option>
  <option value="2">Елена Голованова 2</option>
  <option value="3">Федор Устинов 3</option>
  <option value="4">Иван Мамяко 4</option>
  </select><br>
</div><!--//.frm-group-->

<div class="frm-group">
<input name="sub" type="submit" class="btn-submit" value="Добавить"/></form><br>
</div>
      </div>
      </div><!--//.row-->
</div><!--//.container-->
      
</div><!--//.container-->
</header>
</div><!--//.content-->
  <footer class="site-footer">
  <div class="container">
  <div class="row">
   
    
    
    <div class="col-md-6" >
    </div>
<div class="col-md-6 ">
    <p class="copyright">  Грамузова 2017 &copy</p>
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