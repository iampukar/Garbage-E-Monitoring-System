<?php 


$mysqli = new mysqli("localhost", "root", "", "dustbin");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


 $querr = $mysqli->prepare("SELECT * FROM bin_log ORDER BY `bin_log`.`date_is`");
                        $querr->execute();
                      


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-garbage log</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    

   
     
</head>
<style type="text/css">
 #bin_log
 {
 	margin-top: 10%;
 }
 h3
 {
 	text-align: center;
    background-color: lavender;
 }
</style>
<?php include 'header_nex.php';?>

<body style="background-color:rgba(58, 146, 213,.5);padding:50px;">
 
<div class="container">
<div class="row">

<div class="col-md-2"></div>

<div class="col-md-8 well" id="bin_log">
	<?php foreach ($querr->get_result() as $row)
{
	?>
<h3><?php echo $row['bin_name']." was full on ".$row['date_is'].'.<br/>'; ?></h3> <hr>        
 <?php
}
?>
</div>
<div class="col-md-2"></div>
</div>
</div>

   
 
 <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

