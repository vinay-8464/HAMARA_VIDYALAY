<?php 
$host="localhost";
$user="root";
$pass="";
$db="signup";
$con=mysqli_connect($host,$user,$pass,$db);
$email=$_POST['email'];
$check=mysqli_query($con,"SELECT * FROM `signup_data` WHERE EMAIL='$email'");
if(mysqli_num_rows($check)==0)
	echo '<script>alert("Enter registered mail id only..")</script>';
else
		{
		$query="SELECT PASSWORD FROM `signup_data` WHERE EMAIL='$email';";
		$result=mysqli_query($con,$query);
		$data=mysqli_fetch_all($result,MYSQLI_ASSOC);
		print_r($data);
		}
?>
