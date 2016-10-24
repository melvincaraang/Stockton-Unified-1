<?php
include 'connectionOpen.php';//call file to connect to database


$errors = array(); // array to hold validation errors
$data   = array(); // array to pass back data

if($_SERVER['REQUEST_METHOD'] === 'POST') {
	$username=stripslashes(trim($_POST['username']));
	$password=stripslashes(trim($_POST['password']));

	$q=mysql_num_rows(mysql_query("select * from `user_login` where `username`='$username';"));
	
	if (empty($username)) {
        $errors['username'] = 'Username is required.';
   	}else if($q!=0){
		$errors['username'] = 'Username already exists.';
	}

    if (empty($password)) {
        $errors['password'] = 'Password is required.';
    }
	
	if (!empty($errors)) {
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {
	$q=mysql_query("insert into `user_login` (`username`,`pw`) values ('$username','$password')");
        $data['success'] = true;
        $data['message'] = 'Thank you for signing up!';
    }

    // return all our data to an AJAX call
    echo json_encode($data);
    exit();

	
}
?>