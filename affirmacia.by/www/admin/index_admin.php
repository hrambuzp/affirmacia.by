<?
include('config.php');
include('connect.php');
include('function_admin.php');
Event_Add();

	$page=file_get_contents('index_admin.tpl');
	
	echo $page;

?>