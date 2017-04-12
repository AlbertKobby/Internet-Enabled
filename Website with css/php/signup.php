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
	
	$value1 = $_POST['title'];
	$value2 = $_POST['fname'];
	$value3 = $_POST['lname'];
	$value4 = $_POST['dob'];
	$value5 = $_POST['gender'];
	$value6 = $_POST['phone_number'];
	$value7 = $_POST['email'];
	$value8 = $_POST['address'];
	$value9 = $_POST['username'];
	$value10 = $_POST['password'];
	
	$sql = "INSERT INTO userTab VALUES('$value1','$value2','$value3','$value4','$value5','$value6','$value7','$value8','$value9','$value10')";
		if(!mysql_query($sql)){
			die('Error:'.mysql_error());
		}
	header("location:../login.html");
		
?>