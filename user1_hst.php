<!DOCTYPE html>
<html>
<head>
	<title>User Signed In</title>
</head>
<style>
	body {
	  margin: 0;
	  background: gray;
	}
	table {
		font-size: 20px;
	}
	.basic_box {
        background: white;
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
	}
</style>
<body>
	<?php
		$conn = new mysqli("localhost","root","", "travel");
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$sql = "SELECT * from temp_session";
		$result=mysqli_query($conn, $sql);
		$row=mysqli_fetch_row($result);
    ?>
	<div style="margin-left:2%;">
		<p style="margin-top: 10%;"></p>
			<table class="basic_box">
				<tr>
					<td colspan="6"><p style="font-size: 40px; text-align: center; text-decoration: underline;"><b>Booking History</b></p>
				</td>
				<tr>
					<th>Booking ID</th>
					<th>Name</th>
					<th>Room Type</th>
					<th>Check-in Date</th>
					<th>Check-out Date</th>
					<th>Price</th>
				</tr>
				<tr>
				<?php
					$phone = $row[0];
					
					$sql1 = "SELECT * from booked_hist";
					if ($result=mysqli_query($conn,$sql1))
				  	{
				  		while ($row=mysqli_fetch_row($result))
				    	{
				    		if($row[0]==$phone )
				    		{
				    		?>
				    		<td><?php echo $row[8]; ?></td>
				   			<td><?php echo $row[1]; ?></td>
				   			<td><?php echo $row[3]; ?></td>
				   			<td><?php echo $row[4]; ?></td>
				    		<td><?php echo $row[5]; ?></td>
				    		<td><?php echo $row[7]; } ?></td>
				</tr><?php
				    	}
				    	mysqli_free_result($result); 
				    }?>
			</table>
	</div>
</body>
</html>