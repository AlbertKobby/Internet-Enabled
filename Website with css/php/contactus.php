<?php 
	
	define('DB_NAME','Blessed');
	define('DB_USER','root');
	define('DB_PASSWORD','');
	define('DB_HOST','localhost');
	
		$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
		
	if(!$link){
		die('Could not connect:'.mysql_error());
	}
	
		$db_selected = mysql_select_db(DB_NAME,$link);
	
	if(!$db_selected){
		die('Can not use '.DB_NAME .':'.mysql_error());
	}
	
	/*echo 'Connected Successfully';*/
	
	$value1 = $_POST['username'];
	$value2 = $_POST['email'];
	$value3 = $_POST['phone_number'];
	$value4 = $_POST['message'];
	
	$sql = "INSERT INTO complaints VALUES('$value1','$value2','$value3','$value4')";
		if(!mysql_query($sql)){
			die('Error:'.mysql_error());
		}
		
?>