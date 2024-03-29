<?php 
    require_once('databases.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if(empty($name) || empty($email) || empty($subject) || empty($message))
    {
    	header('Location: '.'contact3.php');
    }
    else{

    	$sql = "INSERT INTO `vopros`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
        
    	if($link->query($sql) === TRUE){
    		header('Location: '.'contact2.php');
    	}
	    else{
	    	echo "no";
	    }

    }



?>