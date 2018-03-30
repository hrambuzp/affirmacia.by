<?php
include('config.php');
include('connect.php');
include('function.php');
if(isset($_GET['id']))
{
	$ID = $_GET['id'] ? $_GET['id'] : 0;
	$ID = (int)$ID;
	if($ID>0)
	{
		//реализация вывода мероприятия
		$page = file_get_contents(PATH_TEMPLATES . 'trening.tpl');
	    $info = Services_Info($ID);
	    $marker = array('{MENU}','{IMG}','{PROGRAM}');
	    $marker_info = array(Menu(0), $info[0],$info[1]);

    	$page = str_replace($marker, $marker_info, $page);


    	echo $page;


		//реализация вывода мероприятия

		exit();	
	}

}















$Cat =isset($_GET['cat']) ? $_GET['cat'] : 0;
$Cat =(int)$Cat;
$Cat =($Cat<=0 OR $Cat>9) ? 1: $Cat;

$page = file_get_contents(PATH_TEMPLATES . 'trening.tpl');
$info = Services($Cat);
    $marker = array('{MENU}','{IMG}','{PROGRAM}');
    $marker_info = array(Menu(0), $info[0],$info[1]);

    $page = str_replace($marker, $marker_info, $page);


    echo $page;


?>