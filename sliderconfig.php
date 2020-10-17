<?php


	$username = "root";
	$password = "";
	$hostname = "localhost"; 
	$database = "demo";
	$dbhandle = mysqli_connect($hostname, $username, $password, $database)or die("Unable to connect to MySQL");
	/*date_default_timezone_set('Asia/Kolkata');
 	$p = date('H:i');*/
  print_r($_POST['submit']);
 	if (isset($_POST['submit'])) {

 	 for($i=0; $i<count($_FILES['image']['name']); $i++) 
 	{ 
 	 	 $path = "/opt/lampp/htdocs/test/"; 
 	 	 //echo($path);
 	 	 $name = $_FILES['image']['name'][$i]; 
 	 	 echo($name);
 	 	 $tmp_name = $_FILES["image"]["tmp_name"][$i];
 	 	 $start = $_POST['start1'];
 	 	 //echo($start);
 	 	 $stop = $_POST['stop1'];
 	 	 echo($tmp_name);
 	 	 var_dump(move_uploaded_file($tmp_name, "$path/$name"));
		 $name_0 = $dbhandle -> real_escape_string($name);
 	 	$check=mysqli_query($dbhandle,"select * from slider1 where imname = '$name_0'");
        $checkrows=mysqli_num_rows($check);
        if($checkrows>0) 
         {
            echo "<br>Image with same name already exist in database. Please try again.<br>";
          }
        else
         {
		$start_0 = $dbhandle -> real_escape_string($start);
		$stop_0 = $dbhandle -> real_escape_string($stop);
           $sql = "INSERT INTO slider1(imid,imname,stdate,spdate) VALUES ('','$name_0','$start_0','$stop_0')";
           if ($dbhandle->query($sql) === TRUE) 
            {
              echo "Image uploaded successfully! Go back and refresh your page ";
            } 
           else 
            {
              echo "Error: " . $sql . "<br>" . $dbhandle->error;
            }

          }


 	}

}

		



?>
