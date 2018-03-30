<?php
function MyString($Str)
{
    $str = $Str;
    $str = trim($str);
    $str = stripcslashes($str);
    $str = htmlspecialchars($str, ENT_QUOTES);
    $str = nl2br($str);

    //return nl2br(htmlspecialchars(stripcslashes(trim($Str)), ENT_QUOTES));
    return $str;
}

function Menu($ID)
{
    global $DB;

    $shablon = file_get_contents(PATH_TEMPLATES .'index_menu.tpl');
    $str='';
    $SQL='SELECT `menu_id`, `menu_name`, `menu_link` FROM `menu` WHERE `visible`=1 ORDER BY `position`';

    $date=mysqli_query($DB,$SQL);

    $count=	mysqli_num_rows($date);



    $mass_marker=array('{ID}','{NAME}','{LINK}','{CLASS}');


    for($i=0; $i<$count; $i++)
    {
     
        $inf = mysqli_fetch_array($date,MYSQL_NUM);
        if($ID==$inf[0])
        {
            $class= 'class="active"';
        }
        else
        {
            $class ='';
        }

         $mass_info = array($inf[0],$inf[1],$inf[2],$class);
        $str.=str_replace($mass_marker,$mass_info,$shablon);

    }
    return $str;
}

function Eventlist()
{
    global $DB;

   $shablon = file_get_contents(PATH_TEMPLATES .'event_index.tpl');
    $str='';
    $mass_marker=array('{DATE}','{EVENT}','{COST}');
   $SQL='SELECT `events_date_string` , `events_name` , `events_cost_string` FROM `events` ORDER BY `events_date` ASC LIMIT 0 , 4';

   $date=mysqli_query($DB,$SQL);

   $inf = mysqli_fetch_array($date,MYSQL_NUM);

 $count= mysqli_num_rows($date);

    for($i=1; $i<$count; $i++)
    {
         $inf = mysqli_fetch_array($date,MYSQL_NUM);
         $mass_info=array($inf[0],$inf[1],$inf[2]);
        $str.=str_replace($mass_marker,$mass_info,$shablon);
    }

     return $str;
}
function Eventlistmain(){
  global $DB;

   $shablon = file_get_contents(PATH_TEMPLATES .'meeting_shablon.tpl');
    $str='';
    $mass_marker=array('{DATEMAIN}','{EVENTMAIN}','{TIMEMAIN}','{COSTMAIN}');
   $SQL='SELECT `events_date_string` , `events_name` , `events_time_string` , `events_cost_string`
FROM `events`
ORDER BY `events_date` ASC
LIMIT 0 , 6';

   $date=mysqli_query($DB,$SQL);

   $inf = mysqli_fetch_array($date,MYSQL_NUM);

 $count= mysqli_num_rows($date);

    for($i=1; $i<$count; $i++)
    {
         $inf = mysqli_fetch_array($date,MYSQL_NUM);
         $mass_info=array($inf[0],$inf[1],$inf[2],$inf[3]);
        $str.=str_replace($mass_marker,$mass_info,$shablon);
    }

     return $str;   



}

function Coach($ID)
{
    global $DB;

    
    $SQL='SELECT  `coach_name`, `coach_img`, `coach_text` FROM `coach` WHERE `coach_id`=' .$ID;

    $date=mysqli_query($DB,$SQL);

    $count= mysqli_num_rows($date);

    if($count==1)
    {
         $inf = mysqli_fetch_array($date,MYSQL_NUM);
         $date =array($inf[0],$inf[1],$inf[2]);
    }

    return $date;
}


function Services($ID)
{
    global $DB;
    $shablon = file_get_contents(PATH_TEMPLATES .'trening_shablon.tpl');
    $str='';
    $image ='';

    $mass_marker=array('{EVENTNAME}','{EVENTANNOTATION}', '{DATESTR}');
    

    
    $SQL="SELECT `events_img`, `events_name`, `events_annotation` ,`events_date_string`   FROM `events`  WHERE  `serv_category_id` =$ID";

    $date=mysqli_query($DB,$SQL);

    $count= mysqli_num_rows($date);

    for($i=0; $i<$count; $i++)
    {
     
        $inf = mysqli_fetch_array($date,MYSQL_NUM);
     
        $image = $inf[0];
        $mass_info = array($inf[1],$inf[2],$inf[3]);
        $str.=str_replace($mass_marker,$mass_info,$shablon);

    }


   

    return array($image,$str);
}

function Services_Info($ID)
{
    global $DB;
    $shablon = file_get_contents(PATH_TEMPLATES .'trening_shablon.tpl');
    $str='';
    $image ='';

    $mass_marker=array('{EVENTNAME}','{EVENTANNOTATION}', '{DATESTR}');
    

    
    $SQL="SELECT `events_img`, `events_name`, `events_annotation` ,`events_date_string`   FROM `events`  WHERE  `events_id` =$ID";

    $date=mysqli_query($DB,$SQL);

    $count= mysqli_num_rows($date);

    for($i=0; $i<$count; $i++)
    {
     
        $inf = mysqli_fetch_array($date,MYSQL_NUM);
     
        $image = $inf[0];
        $mass_info = array($inf[1],$inf[2],$inf[3]);
        $str.=str_replace($mass_marker,$mass_info,$shablon);

    }

    return array($image,$str);
}

function Email_Add()
{
    global $DB;
    if(isset($_POST['sub']))
    {
        $email = $_POST['email'];
        
        if(filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $SQL ="INSERT INTO `email` (`id`, `email`, `status`, `pol`, `FIO`) VALUES (NULL, '$email', '1', '1', 'FIO')";
            mysqli_query($DB, $SQL);
        }
    }
}


function checkUser($login, $password){
    global $DB;
    
    $result_set=$DB->query("SELECT * FROM `admin` WHERE `admin_login`='$login' AND `admin_password`='$password'");
    if ($result_set->fetch_assoc()) return true;
    else return false;
}

function isAdmin($login)
{
    global $DB;
        $result_set=$DB->query( "SELECT * FROM `admin` WHERE `admin_login`='$login'");
    $row=$result_set->fetch_assoc();
    return $row["admin_true"];
}

?>