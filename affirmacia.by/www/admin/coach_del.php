<?
include('config.php');
include('connect.php');
include('function_admin.php');
Coach_Del();

	$page=file_get_contents('coach_del.tpl');
	 $marker = array('{COACHLIST}');
    $marker_info=array(Coach_List());

    $page = str_replace($marker, $marker_info, $page);


	echo $page;

?>