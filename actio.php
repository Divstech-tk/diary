<?php
ob_start();
session_start();
$con = mysqli_connect("localhost","root","","diary");
if(mysqli_connect_errno()) {
	echo "Failed to connect:" . mysqli_connect_error();
}
if(isset($_POST["submit"])) {
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$class=$_POST["class"];
	$subject=$_POST["subject"];
	$tfname=$_POST["tfname"];
	$tlname=$_POST["tlname"];
	$insert1 = "INSERT INTO `student`(`fname`,`lname`,`password`,`email`) VALUES ('$fname','$lname','$password','$email',)";
        $query1 = mysqli_query($con, $insert1) or die(mysqli_error($con)); 
        $insert2 = "INSERT INTO `class`(`className`) VALUES ('$class')";
        $query2 = mysqli_query($con, $insert2) or die(mysqli_error($con));
        $insert3 = "INSERT INTO `subject`(`subjectName`) VALUES ('$subject')";
        $query3 = mysqli_query($con, $insert3) or die(mysqli_error($con));
        $insert4 = "INSERT INTO `teacher` (`tfname`,`tlname`) VALUES ('$tfname','$tlname')";
        $query4 = mysqli_query($con, $insert4) or die(mysqli_error($con));
}
?>