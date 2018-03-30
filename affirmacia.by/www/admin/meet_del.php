<?
include('config.php');
include('connect.php');
include('function_admin.php');
Event_Del();

	$page=file_get_contents('meet_del.tpl');
	 $marker = array('{EVENTLIST}');
    $marker_info=array(Event_List());

    $page = str_replace($marker, $marker_info, $page);


	echo $page;

?>