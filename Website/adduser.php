<?php
require_once('connect.php');

if(isset($_POST) && !empty($_POST)){
 $serial_number = $_POST['serial_number'];
 

 $sql="SELECT * FROM `patient` WHERE	`serial_number` = '$serial_number'";
 $stmt_patient_info = $con->prepare("$sql");
 $stmt_patient_info->execute(array());
 $patient_info = $stmt_patient_info->fetch();
 $patient_count = $stmt_patient_info->rowCount();


 if($patient_count == 0){
	$fmsg = "Sorry, the serial_number is incorrect";
 }else{
	$ser = $patient_info['serial_number'];
	$cas = $patient_info['patient_case'];
	header('Location: resultPatient.php?serial='.$ser.'&case='.$cas);
 }
}


?>
<!DOCTYPE html>
<html>

<head>
    <title>PATIENT LOG IN</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <!-- <link rel="stylesheet" href="login/styles.css"> -->

    <!-- Latest compiled and minified JavaScript -->
    <script src=""></script>

    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    color: white;


}

.page {
    height: 100%;
    width: 100%;
    background-image: linear-gradient(rgb(0, 0, 0, 0.9), rgb(0, 0, 0, 0.4)), url(p1.jpg);
    background-position: center;
    background-size: cover;
    position: absolute;
}

.form-box {
    width: 500px;
    height: 600px;
    position: absolute;
    /*margin: 1% auto;*/

    padding: 50px;
    overflow: hidden;
}


.input-group-login {
    top: 100px;
    position: absolute;
    width: 300px;
    transition: 3s;

}

.input-field {
    width: 150%;
    height: 70px;
    padding: 50px 0;
    margin: 5px 0;
    border-left: 0;
    border-right: 0;
    border-top: 0;
    /*border-bottom: 1px solid #999;*/
    outline: none;
    background: transparent;


}

.btn {
    width: 100%;
    height: 70px;
    padding: 10px 50px;
    cursor: pointer;
    display: block;
    margin: 50px;
    background-color: rgb(7, 84, 146);
    border: 0;
    outline: none;
    border-radius: 50px;

}

#login {
    left: 50px;

}

#login-input {

    font-size: 20;

}

a {
    text-decoration: none;
    font-size: 15px;
}
</style>

<body style="margin-left: -243px;">

    <div class="container">

        <div class="page">

            <p style="margin-left: 160px; font-size: 30px; margin-top: 60px;">Health Is Not Every Thing , <br> &nbsp;But
                Without It Every Thing Else Is No Thing</p>
            <div id='login-form' class='login-page'>

                <div class="form-box">


                    <div class="button-box">


                    </div>
                    <form id="login" class="input-group-login" method="post">

                        <input type="number" name="serial_number" class="input-field" placeholder="Enter Your serial number"
                            required>

                        <?php if(isset($fmsg)){?>
                        <div class="alert alert-danger alert-dismissible fade show text-center"
                            style="    background: #5a0202;    width: 149%;" role="alert">
                            <strong><?php echo $fmsg; ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php } ?>

                        <button class="btn btn-lg btn-primary btn-block" type="submit">LOG IN</button>

                    </form>
                </div>
                <script src="jquery-3.4.0.min.js"></script>
                <script src="poupper.js"></script>
                <script src="bootstrap.min.js"></script>

</body>

</html>