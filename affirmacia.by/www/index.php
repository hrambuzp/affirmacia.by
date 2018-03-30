<?php
include('config.php');
include('connect.php');
include('function.php');
Email_Add();



    $page = file_get_contents(PATH_TEMPLATES . 'index.tpl');
    $info= Eventlist();
    $marker = array('{MENU}','{EVENTLIST}');
    $marker_info = array(Menu(1), $info);

    $page = str_replace($marker, $marker_info, $page);

    
    echo $page;


?>