<?php
if(isset($_GET['serial'])){
	$p_serial = $_GET['serial'];
	$case = $_GET['case'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>patient result</title>
	<style type="text/css">
		*{	margin: 0;
	padding: 0;
	box-sizing: border-box;
	
	height: 100%;
	width: 100%;
	
}
  .page{
	height: 100%;
	width: 100%;
	background-image: linear-gradient(rgb(0, 0, 0,0.7),rgb(0, 0, 0,0.4)),url(3.jpg);
	background-position: center;
	background-size: cover;
	position: absolute;
}
.form-box{
	width: 800px;
	height: 500px;
	position: relative;
	margin: 9% auto;
	background: rgb(175, 201, 211,0.7);
	padding: 150PX;
	border-radius: 5px;
}


	</style>
</head>
<body>

<div class="page">

<form>
 <div class="form-box">
	<p style="font-size: 20px; font-weight: bold;width: 140%;">YOUR SERIAL NUMBER: <?php echo $p_serial ?></p>
	<P style="font-size: 20px; font-weight: bold;">YOUR HEART CASE: <?php echo $case ?></P>
  </div>
</form>
</body>
</html>