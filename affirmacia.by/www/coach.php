<?php
include('config.php');
include('connect.php');
include('function.php');
$ID = isset($_GET['id']) ? $_GET['id']:0;
$ID =(int)$ID;




    $page = file_get_contents(PATH_TEMPLATES . 'coach.tpl');
    $info = Coach($ID);

    $marker = array('{MENU}','{COACHNAME}','{IMGID}','{COACHTEXT}');
    $marker_info = array(Menu(0),$info[0], $info[1], $info[2]);

    $page = str_replace($marker, $marker_info, $page);


    echo $page;


?>