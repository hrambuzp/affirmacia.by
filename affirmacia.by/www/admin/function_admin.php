<?
function Event_Add()
	{
		
		if (isset ($_POST['sub'])){

			 global $DB;

			 $name = $_POST['name'];
			 $date = $_POST['date'];
			 $datestring = $_POST['datestring'];
			 $time = $_POST['time'];
			 $cost = $_POST['cost'];
			 $coststring = $_POST['coststring'];
			 $annotation = $_POST['annotation'];
			 $img = $_POST['img'];
			 $serv = $_POST['serv'];
			 $servcat = $_POST['servcat'];
			 $coach = $_POST['coach'];
			 


			 $SQL ="INSERT INTO `events` (`events_name`, `events_date`, `events_date_string`, `events_time_string`, `events_cost`, `events_cost_string`, `events_annotation`, `events_img`, `services_id`, `serv_category_id`, `coach_id`) VALUES ( '$name', '$date', '$datestring', '$time', '$cost', '$coststring', '$annotation', '$img', '$serv', '$servcat','$coach' )";
			
            mysqli_query($DB, $SQL);

			    
		}
	}

function Event_List()
{
	  global $DB;
    $str ='';
    $shablon = file_get_contents('event_list.tpl');
    $SQL = 'SELECT `events_id`,`events_name` FROM `events`  ORDER BY `events_id` DESC';
    
   $date=mysqli_query($DB,$SQL);
     $inf = mysqli_fetch_array($date,MYSQL_NUM);
 $count= mysqli_num_rows($date);

    $marker = array('{NAME}','{ID}');

    for($i=1; $i<$count; $i++)
    {
        $inf = mysqli_fetch_array($date,MYSQL_NUM);
        $marker_info =array($inf[1], $inf[0]);
        $str .=str_replace($marker, $marker_info, $shablon);

    }

    return $str;

}


 function Event_Del()
{  global $DB;
    if(isset($_GET['id']))
    {
        $ID = isset($_GET['id']) ? $_GET['id']:0;
       $ID =(int)$ID;
        $SQL = 'DELETE  FROM `events` WHERE `events_id`='. $ID;
        mysqli_query($DB, $SQL);

    }

}



function Coach_Add()
	{
		
		if (isset ($_POST['sub'])){

			 global $DB;

			 $name = $_POST['name'];
			 $annotation = $_POST['annotation'];
			 $description = $_POST['description'];
			 $img = $_POST['img'];
			 $position = $_POST['position'];
			 $visible = $_POST['visible'];
			 
			 


			 $SQL ="INSERT INTO `coach` (`coach_name`, `coach_annotation`, `coach_text`, `coach_img`, `position`, `visible`) VALUES ( '$name', '$annotation', '$description', '$img', '$position', '$visible')";
			
            mysqli_query($DB, $SQL);

			    
		}
	}

function Coach_List()
{
	  global $DB;
    $str ='';
    $shablon = file_get_contents('coach_list.tpl');
    $SQL = 'SELECT `coach_id`,`coach_name` FROM `coach`  ORDER BY `coach_id` DESC';
    
   $date=mysqli_query($DB,$SQL);
     $inf = mysqli_fetch_array($date,MYSQL_NUM);
 $count= mysqli_num_rows($date);

    $marker = array('{NAMECOACH}','{ID}');

    for($i=1; $i<$count; $i++)
    {
        $inf = mysqli_fetch_array($date,MYSQL_NUM);
        $marker_info =array($inf[1], $inf[0]);
        $str .=str_replace($marker, $marker_info, $shablon);

    }

    return $str;

}


 function Coach_Del()
{  global $DB;
    if(isset($_GET['id']))
    {
        $ID = isset($_GET['id']) ? $_GET['id']:0;
       $ID =(int)$ID;
        $SQL = 'DELETE  FROM `coach` WHERE `coach_id`='. $ID;
        mysqli_query($DB, $SQL);

    }

}