<?
include('config.php');
include('connect.php');
include('function_admin.php');
Coach_Add();

	$page=file_get_contents('coach_add.tpl');
	
	echo $page;

?>