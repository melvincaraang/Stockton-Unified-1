<?php
include 'connectionOpen.php';//call file to connect to database

$errors = array(); // array to hold validation errors
$data   = array(); // array to pass back data

if($_SERVER['REQUEST_METHOD'] === 'POST') {	
	$q=mysql_query("select * from `schools` ORDER BY SCHOOL_NAME ;");
 	
        $data['success'] = true;

	$row = mysql_fetch_array($q);
	$data['first_school'] = $row['SCHOOL_NAME'];

	do{
	    $list .= "<option value='" . $row['SCHOOL_NAME'] . "'>" . $row['SCHOOL_NAME'] . "</option>";
	} while ($row = mysql_fetch_array($q));
	$data['message'] = $list;



    

    // return all our data to an AJAX call
    echo json_encode($data);
    exit();

	
}

?>