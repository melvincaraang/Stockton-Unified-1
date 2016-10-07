<?php
include 'connectionOpen.php'

$errors = array();      //array to hold validaton errors
$data = array();        //array to pass back data

if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $q=mysql_query("select * from `susd_staff_view`;");

        $data['success'] = true;

        $row = mysql_fetch_array($q);
        $data['first_name'] = $row['FIRST_NAME'];
		echo($data);

        /*      do{

        $list .= "<option value='" . $row['FIRST_NAME'] . "'>" .
        $row['FIRST_NAME'] . "</option>";
        } while ($row = mysql_fetch_array($q));
        $data['message'] = $list;
        */


        //return all our data to an AJAX call
        echo json_encode($data);
        exit();

}
?>
