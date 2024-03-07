<?php
 
require_once'connections2.php';
$con= mysqli_connect($dbhost, $dbuser, $dbpassword, $db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

date_default_timezone_set('Africa/Accra');

$today = date('Y-m-d H:i:s', strtotime("+8 hour"));
$now = date('Y-m-d H:i:s');
$nowTime = time();
$UT008 = 'UT008';//USERTOKEN EXPIRED
$UT009 = 'UT009'; // USERKEY NOT CORRECTT
$UT010 = 'UT010'; // USERKEY NOT EXIST
$UT011 = 'UT011'; // USERKEY OKPA NOT EXIST
$UT012 = 'UT012'; // USERKEY SESSION EXPIRED LOGIN AGAIN 
$expTime = time() + ( 4 * 60 * 60);

$expTimeF = time() - ( 4 * 60 * 60);

		$sql0 = "SELECT * FROM `employeepersonaldetailsupdated` ORDER BY `employeepersonaldetailsupdated`.`id` ASC";
		$query0 = mysqli_query($con, $sql0);
		$respondhs = array();
		while ($row = $query0->fetch_assoc()) {
			$respondhs[] = $row;
				}
		
		 echo $ddd2 =	json_encode($respondhs);
	

	