<?php 
$host="localhost";
$user="root";
$pass="";
$db="signup";
$db1="emp";
$con=mysqli_connect($host,$user,$pass,$db);
$con1=mysqli_connect($host,$user,$pass,$db1);
$empid=$_POST['empid'];
$email=$_POST['email'];
$password=$_POST['conpass'];
$check1=mysqli_query($con1,"SELECT * FROM `emp_data` WHERE EMP_ID='$empid'");
$check=mysqli_query($con,"SELECT * FROM `signup_data` WHERE EMAIL='$email'");
if(mysqli_num_rows($check1)==0)
	echo '<script>alert("Invalid EMPID..")</script>';
else if(mysqli_num_rows($check)>0)
	echo '<script>alert("Already registered..please login")</script>';
else
	{
	$query="INSERT INTO `signup_data` (`EMP_ID`, `EMAIL`, `PASSWORD`) VALUES ('$empid', '$email', '$password');";
	$insert=mysqli_query($con,$query);
if($insert)
		echo '<script>alert("Signup Successfull..")</script>';
	}
?>
	

