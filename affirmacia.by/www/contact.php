<?php
include('config.php');
include('connect.php');
include('function.php');




    $page = file_get_contents(PATH_TEMPLATES . 'contact.tpl');

    $marker = array('{MENU}');
    $marker_info = array(Menu(1));

    $page = str_replace($marker, $marker_info, $page);


    echo $page;

$to='appolinarius@mail.ru';
$zagolovok='Cообщение с сайта';
$headers='Content-type: subject; charset="utf-8"';

if (isset($_POST['sub'])){
	
	$contactname=$_POST['name'];
	$tel=$_POST['tel'];
	$message=$_POST['subject'];

	$messages=$message."\n".$tel."\n".$contactname;

    mail($to, $zagolovok, $messages);
   echo '<script>alert("Ваше сообщение отправлено!");</script>';
}

?>