<?php 
$host="localhost";
$user="root";
$pass="";
$db1="hygeine";
$db2="student";
$con=mysqli_connect($host,$user,$pass,$db1);
$con1=mysqli_connect($host,$user,$pass,$db2);
$roll=$_POST['roll'];
$hostel=$_POST['hostel'];
$check=mysqli_query($con,"SELECT * FROM `hygeine_data` WHERE HOSTEL='$hostel'");
$check1=mysqli_query($con1,"SELECT * FROM `stud_data` WHERE ID_NO='$roll'");
if(mysqli_num_rows($check)>0)
	echo '<script>alert("Complaint already submitted..")</script>';
else if(mysqli_num_rows($check1)>0)
	{
$query="INSERT INTO `hygeine_data` (`ID_NO`, `HOSTEL`) VALUES ('$roll', '$hostel');";
$insert=mysqli_query($con,$query);
if($insert)
		echo '<script>alert("Complaint submitted successfully")</script>';
	}
else
		echo '<script>alert("Invalid student id number")</script>';
?>

