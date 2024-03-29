<?php 
    require_once('databases.php');
    $login = $_POST['login'];
    $pass = $_POST['pass'];

    if(empty($login) || empty($pass))
    {
    	header('Location: '.'entry2.php');
    }
    else{

    	$sql = "SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'";
    	$result = $link->query($sql);

    	if($result->num_rows>0){
    		header('Location: '.'student.php');
    	}
	    else{
	    	echo "no";
	    }

    }



?>