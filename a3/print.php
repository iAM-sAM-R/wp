<?php 
session_start();

 $createToday = new DateTime('now', new DateTimeZone('Asia/Colombo'));
  $today= $createToday->format('Y-m-d');

 $name = $_SESSION['name'];
 $email = $_SESSION['email'];
 $contact = $_SESSION['contact'];
 $age = $_SESSION['age'];
 $movie = $_SESSION['movie'];
 $seat = $_SESSION['seat'];
 $sesCountat = $_SESSION['sCount'];
 $date = $_SESSION['date'];
 $clock = $_SESSION['clock'];
 $total = $_SESSION['total'];

 if(isset($_SESSION['email'])){
 	?>
 	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PRINT</title>
</head>
<body>

	<table width="100%">
		<tr>
			<td width="33%"></td>
			<td width="33%" align="center">
				<img src="images/logo.png" style="width: 50%;"><p style="font-family: Impact, fantasy;font-size: 20px;color: #3A3A3C;margin-top: -10px;color: orange;">Lunardo Cinema</p>
			</td>
			<td width="33%"></td>
		</tr>
	</table>

	<table width="100%">
		<tr>
			<td width="20%"></td>
			<td width="60%">
				<table width="100%">
					<tr>
						<td></td>
						<td align="center"><span style="font-size: 30px;font-weight: bolder;color: orange;">INVOICE</span></td>
						<td></td>
					</tr>
				</table>
				<table width="100%" >
						<tr>
							<td>Name</td>
							<td>:</td>
							<td><?php echo $name ?></td>

							<td>Email</td>
							<td>:</td>
							<td><?php echo $email ?></td>
						</tr>
						<tr>
							<td>Age</td>
							<td>:</td>
							<td><?php echo $age ?></td>

							<td>Contact </td>
							<td>:</td>
							<td><?php echo $contact ?></td>
						</tr>	
						
						</table>

						<table width="100%">
							<tr>
								<td width="20%"></td>
								<td width="60%" align="center"><span style="font-size: 30px;font-weight: bolder;color: orange;">Ticket Details</span></td>
								<td width="20%"></td>
							</tr>
						</table>
						<table width="100%">
							<tr>
								<td width="20%"></td>
								<td width="60%">
									<table width="100%">
										<tr>
											<td>Movie Name</td>
											<td>:</td>
											<td><?php echo  $movie ?></td>
										</tr>
										<tr>
											<td>Seat Type</td>
											<td>:</td>
											<td><?php echo  $seat ?></td>
										</tr>
										<tr>
											<td>Seat Count</td>
											<td>:</td>
											<td><?php echo $sesCountat ?></td>
										</tr>
										<tr>
											<td>Booking Date</td>
											<td>:</td>
											<td><?php echo $date ?></td>
										</tr>
										<tr>
											<td>Booking Time</td>
											<td>:</td>
											<td><?php echo $clock ?></td>
										</tr>

										<tr>
											<td></td>
											<td></td>
											<td>________</td>
										</tr>
										<tr>
											<td>Total Price($)</td>
											<td></td>
											<td><?php echo $total ?></td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td>________<br>________	</td>
										</tr>
									</table>
								</td>
								<td width="20%"></td>
							</tr>
						</table>
			</td>
			<td width="20%"></td>
		</tr>
	</table>
	<table width="100%" style="margin-top: 6%;">
		<tr>
			<td width="20%" style="background-color: orange;"></td>
			<td width="60%" align="center"><span style="font-size: 30px;font-weight: bolder;color: black;">THANK YOU COME AGAIN !</span></td>
			<td width="20%" style="background-color: orange;"></td>
		</tr>
	</table>

	 <script type="text/javascript">

 	window.print();
 </script>
</body>
</html>
 	<?php

 	session_destroy();
 }else{
 	header("Location: index.php");
die();
 }
?>
