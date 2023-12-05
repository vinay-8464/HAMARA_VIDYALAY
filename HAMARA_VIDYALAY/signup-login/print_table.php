<!DOCTYPE html>
<html>
<head>
<title>Complaint_Data</title>
</head>
<body>
<!--Electrical data-->
<table border="1">
	<thead>
		<tr>
			<h3 style="color:red;"><em>Electrical Complaints:</em></h3>
			<th>ID_NO</th>
			<th>ROOM</th>
			<th>PROBLEM</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$host="localhost";
			$user="root";
			$pass="";
			$db="electricity";
			$con=mysqli_connect($host,$user,$pass,$db);
			$selectquery="SELECT * FROM `elec_data`";
			$query=mysqli_query($con,$selectquery);
			while($res=mysqli_fetch_array($query))
				{
			?>
		<tr>
			<td><?php echo $res['ID_NO']; ?></td>
			<td><?php echo $res['ROOM']; ?></td>
			<td><?php echo $res['PROBLEM']; ?></td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>
<!--Dormitorie data-->
<table border="1">
	<thead>
		<tr>
			<h3 style="color:red;"><em>Dormitorie Complaints:</em></h3>
			<th>ID_NO</th>
			<th>DORM</th>
			<th>PROBLEM</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$db="room";
			$con=mysqli_connect($host,$user,$pass,$db);
			$selectquery="SELECT * FROM `room_data`";
			$query=mysqli_query($con,$selectquery);
			while($res=mysqli_fetch_array($query))
				{
			?>
		<tr>
			<td><?php echo $res['ID_NO']; ?></td>
			<td><?php echo $res['ROOM']; ?></td>
			<td><?php echo $res['PROBLEM']; ?></td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>
<!--Hygeine issues-->
<table border="1">
	<thead>
		<tr>
			<h3 style="color:red;"><em>Hygeine issues:</em></h3>
			<th>ID_NO</th>
			<th>HOSTEL</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$db="hygeine";
			$con=mysqli_connect($host,$user,$pass,$db);
			$selectquery="SELECT * FROM `hygeine_data`";
			$query=mysqli_query($con,$selectquery);
			while($res=mysqli_fetch_array($query))
				{
			?>
		<tr>
			<td><?php echo $res['ID_NO']; ?></td>
			<td><?php echo $res['HOSTEL']; ?></td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>
</body>
</html>
