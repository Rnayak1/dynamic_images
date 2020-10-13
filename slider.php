<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>slider view</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script type="text/javascript" src="slider.js"></script>
	<script type="text/javascript" src="slider1.js"></script>
</head>
<body>
		<form action="sliderconfig.php" method="POST" enctype="multipart/form-data"> 
		<div><input type="file" name="image[]" multiple="" accept="image/*" id="imagen" />
		<p id="msg1" style="display: none; color: red;"> **please choose images **</p></div>
		<div>start time <input type="time" name="start1" id="start"><br>
		<p id="msg2" style="display: none; color: red; "> **enter start time **</p></div>
		<div>stop time <input type="time" name="stop1" id="stop"><br>
		<p id="msg3" style="display: none; color: red; "> **enter stop time**</p></div>
		<input type="submit" name="submit" value="submit" id="button" />
		<p id="msg4" style="display: none; color: red; "> images successfully uploaded </p>
		<p id="msg5" style="display: none; color: red; "> attempt unsuccessfull </p>
		</form>

</body>
</html>	
