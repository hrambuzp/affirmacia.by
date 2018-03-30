<?php
include('config.php');
include('connect.php');
include('function.php');



    $page = file_get_contents(PATH_TEMPLATES . 'onas.tpl');

    $marker = array('{MENU}');
    $marker_info = array(Menu(2));

    $page = str_replace($marker, $marker_info, $page);


    echo $page;


?>