<?php
include 'connectionOpen.php';//call file to connect to database

$errors = array(); // array to hold validation errors
$data   = array(); // array to pass back data

if($_SERVER['REQUEST_METHOD'] === 'POST') {
	$school=stripslashes(trim($_POST['school']));
	
	// Check if user is in database
	$q=mysql_query("select * from schools where SCHOOL_NAME='$school';");

	
	  	
	if (!empty($errors)) {
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {
	$row = mysql_fetch_array($q);
        $data['success'] = true;
        $data['message'] = $row;

	


    }

    // return all our data to an AJAX call
    echo json_encode($data);
    exit();

	
}

?>