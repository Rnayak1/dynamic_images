<?php
function show()
{

	$username = "root";
	$password = "";
	$hostname = "127.0.0.1"; 
	$database = "demo";
	$dbhandle = mysqli_connect($hostname, $username, $password, $database)or die("Unable to connect to MySQL");
	date_default_timezone_set('Asia/Kolkata');
    $p = date('H:i');
    $myarray = array();
    $count1 =1;
	$check1 = mysqli_query($dbhandle,"select imname,spdate from slider1 where (stdate <= '$p' AND spdate > '$p')");
	$checkrows1 = mysqli_num_rows($check1);
	if($checkrows1 == 0)
	{
		$myarray[] = "1.jpg";
		$myarray['stop'] = 0;
		echo json_encode($myarray);
		exit();
	}
	else
	{
		while ($row = $check1->fetch_assoc())
		 {
			$myarray[] = $row['imname'];
			$myarray['stop'] = $row['spdate'];
			$myarray['count0'] = $count1++;	
		 }
		
		 echo json_encode($myarray);	
	}
}
show();
?>