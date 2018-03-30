<?php
include('config.php');
include('connect.php');
include('function.php');




    $page = file_get_contents(PATH_TEMPLATES . 'meeting.tpl');
    $info= Eventlistmain();
    $marker = array('{MENU}','{EVENTLISTMAIN}');
    $marker_info = array(Menu(1), $info);

    $page = str_replace($marker, $marker_info, $page);

    
    echo $page;


?>