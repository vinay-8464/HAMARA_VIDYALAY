<?php 
$host="localhost";
$user="root";
$pass="";
$db1="electricity";
$db2="student";
$con=mysqli_connect($host,$user,$pass,$db1);
$con1=mysqli_connect($host,$user,$pass,$db2);
$roll=$_POST['roll'];
$room=$_POST['room'];
$problem=$_POST['problem'];
$check=mysqli_query($con,"SELECT * FROM `elec_data` WHERE ROOM='$room'");
$check1=mysqli_query($con1,"SELECT * FROM `stud_data` WHERE ID_NO='$roll'");
if(mysqli_num_rows($check)>0)
	echo '<script>alert("Complaint already submitted..")</script>';
else if(mysqli_num_rows($check1)>0)
	{
$query="INSERT INTO `elec_data` (`ID_NO`, `ROOM`, `PROBLEM`) VALUES ('$roll', '$room', '$problem');";
$insert=mysqli_query($con,$query);
if($insert)
		echo '<script>alert("Complaint submitted successfully")</script>';
	}
else
		echo '<script>alert("Invalid student id number")</script>';
?>

