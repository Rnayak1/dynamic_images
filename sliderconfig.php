<?php


	$username = "root";
	$password = "";
	$hostname = "127.0.0.1"; 
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

 	 	$check=mysqli_query($dbhandle,"select * from slider1 where imname = '$name'");
        $checkrows=mysqli_num_rows($check);
        if($checkrows>0) 
         {
            echo "<br>"."image with same name already exist in database "."<br>";
          }
        else
         {
           $sql = "INSERT INTO slider1(imid,imname,stdate,spdate) VALUES ('','$name','$start','$stop')";
           if ($dbhandle->query($sql) === TRUE) 
            {
              echo "image uploaded successfully go back and refresh your page ";
            } 
           else 
            {
              echo "Error: " . $sql . "<br>" . $dbhandle->error;
            }

          }


 	}

}

		



?>