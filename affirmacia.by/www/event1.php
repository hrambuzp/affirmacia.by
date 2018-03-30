<?php
include('config.php');
include('connect.php');
include('function.php');
$ID = isset($_GET['id']) ? $_GET['id']:0;
$ID =(int)$ID;



    $page = file_get_contents(PATH_TEMPLATES . 'event1.tpl');
    //$info= Eventslider();
    $marker = array('{EVSOLONOTICE}', '{EVSOLOTEXT}','{IMAGESLIDERIVENT}', '{EVSOLODATE}');
   $marker_info = array(Eventsolo($ID));

    $page = str_replace($marker, $marker_info, $page);

    
    echo $page;


?>