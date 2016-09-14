<?php
include 'connectionOpen.php';//call file to connect to database

echo 'HIHIHI';

$errors = array(); // array to hold validation errors
$data   = array(); // array to pass back data

if($_SERVER['REQUEST_METHOD'] === 'POST') {
	$username=stripslashes(trim($_POST['username']));
	$password=stripslashes(trim($_POST['password']));
	
	// Check if user is in database
	$q=mysql_query("select * from `user_login` where username=`$username`");
	
	echo $q;
	echo 'yo';
	
	// Error for blank username
	if (empty($username)) {
        $errors['username'] = 'Username is required.';
    }

	//Error for username does not exist
	  //code goes here
	  
	// Error for blank password
    if (empty($password)) {
        $errors['password'] = 'Password is required.';
    }
	
	// Error for wrong password
	  //Code goes here
	  
	$data['query'] = $q;
	
	if (!empty($errors)) {
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {
        $data['success'] = true;
        $data['message'] = 'Login Successful';
    }

    // return all our data to an AJAX call
    echo json_encode($data);
    exit();

	
}
?>