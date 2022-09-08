<?php
require_once('connect.php');
session_start();
error_reporting(0);
if (isset($_POST['submit'])){
	$email = $_POST['email2'];
	$password = $_POST['password2'];

 $sql="SELECT * FROM `doctor` WHERE	`email` = '$email' && `password`= '$password'";
 $stmt_patient_info = $con->prepare("$sql");
 $stmt_patient_info->execute(array());
 $patient_info = $stmt_patient_info->fetch();
 $patient_count = $stmt_patient_info->rowCount();


 if($patient_count == 0){
	$fmsg = "Sorry, the login information is incorrect";
 }else{
	$ser = $patient_info['password'];
	header('Location: doctorresult.php?serial='.$ser);
 }
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap.min.css">
	<title>doctor login</title>
	<style type="text/css">
		*{	margin: 0;
	padding: 0;
	box-sizing: border-box;
	color: white;


}
.page{
	height: 100%;
	width: 100%;
	background-image: linear-gradient(rgb(0, 0, 0,0.9),rgb(0, 0, 0,0.4)),url(2.jpg);
	background-position: center;
	background-size: cover;
	position: absolute;
}

.form-box{
	width: 500px;
	height: 600px;
	position: absolute;
	/*margin: 1% auto;*/
	
	padding: 50px;
	overflow: hidden;
}


.input-group-login
{
	top: 100px;
	position:absolute;
	width: 300px;
	transition: 3s;

 }
  .input-field
 {
 	width: 150%;
 	height: 70px;
 	padding: 10px 0;
 	margin: 5px 0;
 	border-left: 0;
 	border-right: 0 ;
 	border-top: 0;
 	/*border-bottom: 1px solid #999;*/
 	outline: none;
 	background: transparent;


 }
.btn
{
	width: 100%;
	height: 40px;
	padding: 10px 50px;
	cursor: pointer;
	display: block;
	margin: 50px;
	background-color: rgb(7, 84, 146);
	border: 0;
	outline: none;
	border-radius: 50px;

}

#login{
	left: 50px;

}
#login-input{

	font-size: 20;

}
a {
	text-decoration: none;
	font-size: 15px;
}
		

	</style>
</head>
<body>
		 <div class="page">
		 	<p style="font-size: 50px; margin-left: 60px; margin-top: 40px;">Welcome Doctors..</p> <br>
				<h3 style="margin-left: 120px;"><i> Always remember that the best doctor<br>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; is the one who inspires hope</i></h3>
		<div id='login-form' class='login-page'>
			
			<div class="form-box">
				

				<div class="button-box" >
					
			
			</div>
			<form id="login" class="input-group-login" action="" method="post">
			
				<input type="email"  name="email2" class="input-field" placeholder="Enter Your Email"  value="<?php echo $email2;?>" required>
				<input type="password" name="password2" class="input-field" placeholder="Enter Your Password"  value="<?php echo $_POST['password2'] ;?>" required>
				<?php if(isset($fmsg)){?>
                        <div class="alert alert-danger alert-dismissible fade show text-center"
                            style="    background: #5a0202;    width: 149%;" role="alert">
                            <strong><?php echo $fmsg; ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php } ?>
				 <button class="btn btn-lg btn-primary btn-block" name="submit">LOG IN</button>
			</form>

			<script src="jquery-3.4.0.min.js"></script>
                <script src="poupper.js"></script>
                <script src="bootstrap.min.js"></script>
</body>
</html>