<?php 
session_start();
require_once('connect.php');

$sql="SELECT * FROM `patient`";
$stmt_patient_info = $con->prepare("$sql");
$stmt_patient_info->execute(array());
$patient_info = $stmt_patient_info->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> doctor result</title>
	<style type="text/css">
		*{
			background: rgba(85, 122, 155, 0.781);
		}
		
	</style>

	

	
</head>
<body>
	<?php foreach($patient_info as $pan){ ?>
	<div style="background-color: white; height: 50px; width: 50; padding: 30px;margin: 50px;">
		<p style="background-color: white;"> Patient Number:  <?php echo $pan['serial_number'] ?></p>
		<p style="background-color: white;"> PATIENT CASE:     <?php echo $pan['patient_case'] ?></p>
	</div>
  <?php }	?>


</body>
</html>