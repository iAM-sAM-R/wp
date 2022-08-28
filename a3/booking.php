
<?php 
	
	if(isset($_GET['movie'])){
		?>
		<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="main.js" ></script>
	<title>Lunardo Cinema</title>
</head>
<style type="text/css">
	.navi-btn{
		font-family: Impact, fantasy;
font-size: 30px;
color: orange;
border: 1px solid #796d6d;
padding: 10px;
border-radius: 5px;
	}

	.navi-btn:hover{
		font-family: Impact, fantasy;
font-size: 30px;
color: red;
border: 1px solid #796d6d;
padding: 10px;
border-radius: 5px;
box-shadow: 5px 10px #c88407;;
	}

	.sub-head{
		font-family: Impact, fantasy;
font-size: 60px;
color: orange;

padding: 10px;
border-radius: 5px;
	}

	.flip-card {
  background-color: transparent;
  width: 200px;
  height: 370px;
  /*border: 1px solid black;*/
  perspective: 1000px;
}


.flip-card-inner {
  position: center;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}


.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}


.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}


.flip-card-front {
  background-color: #f9f9f9;;
  color: black;
}


.flip-card-back {
  background-color: grey;
  color: white;
  transform: rotateY(180deg);
}

.book-btn{
	padding:5px;color:red;font-weight: bolder;background-color: yellow;border: 1px solid yellow;border-radius: 5px;font-size: 15px;
}
</style>
<body style="background-image: url('images/theatre_1.jpg'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">

	<table width="100%">
		<tr>
			<td width="33%"></td>
			<td width="33%" align="center">
				<img src="images/logo.png" style="width: 50%;"><p style="font-family: Impact, fantasy;font-size: 50px;color: #3A3A3C;margin-top: -10px;color: orange;">Lunardo Cinema</p>
			</td>
			<td width="33%"></td>
		</tr>
		<tr>
			<td></td>
			<td align="center"><span class="navi-btn">ABOUT US</span><span class="navi-btn">PRICES</span><span class="navi-btn">SHOWS</span></td>
			<td></td>
		</tr>
	</table>

	<div style="margin-top: 6%;">
		<marquee>
			<img src="images/imdb.png" style="width: 250px;">
			<img src="images/wave.jpg" style="width: 250px;">
			<img src="images/dts.jpg" style="width: 250px;">
			<img src="images/motion.png" style="width: 250px;">
			<img src="images/kodak.jpg" style="width: 250px;">
			<img src="images/cin.jpg" style="width: 210px;">
			<img src="images/meter.png" style="width: 250px;">
		</marquee>
	</div>

	<div style="margin-top: 6%;background-image: url('images/theatre4.jpg'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;width: 102%;margin-left: -1%;">
		<form action="bookingSubmmit.php" method="POST">
		<table width="100%">
			<tr>
				<td width="33%"></td>
				<td width="33%" align="center"><span class="sub-head">BOOK YOUR SHOW</span></td>
				<td width="33%"></td>
			</tr>
			<tr>
				<td width="33%"></td>
				<td width="33%" align="center">
					<table width="100%">
						<tr>
							<td>
								<table width="100%">
									<tr>
										<td><span style="color: red;font-size: 23px;font-weight: bold;">Contact Details</span></td>
									</tr>
									<tr>
										<td>Name</td>
										<td>:</td>
										<td><input type="text" name="name" required ></td>
									</tr>
									<tr>
										<td>Email Address</td>
										<td>:</td>
										<td><input type="email" required name="email"></td>
									</tr>
									<tr>
										<td>Contact Number</td>
										<td>:</td>
										<td><input type="text" name="contact" required></td>
									</tr>
									<tr>
										<td>Age</td>
										<td>:</td>
										<td><input type="number" name="age" required></td>
									</tr>
								</table>
							</td>

						</tr>
						<tr>
							<td>
								<table width="100%">
									<tr>
										<td><span style="color: red;font-size: 23px;font-weight: bold;">Ticket Details</span></td>
									</tr>
									<tr>
										<td>Movie Name</td>
										<td>:</td>
										<td><input type="text" value="<?php echo $_GET['movie'] ?>" name="movie" readonly></td>
									</tr>
									<tr>
										<td>Seat</td>
										<td>:</td>
										<td>
											<select name="seat" id="seat" style="width: 200px; height: 22px;" onchange="calculate()" required="required">
											<option value="">Please select</option>
											<option value="STA">Standard Adult ($20.50)</option>
											<option value="STP">Standard Concession ($18.00)</option>
											<option value="STC">Standard Child ($16.50)</option>
											<option value="FCA">First Class Adult ($30.00)</option>
											<option value="FCP">First Class Concession ($27.00)</option>
											<option value="FCC">First Class Child ($24.00)</option>					
										</select>
										</td>
									</tr>
									<tr>
										<td>Seat Count</td>
										<td>:</td>
										<td><input type="text" value="1" name="sCount" id="sCount" onkeyup="calculate()"></td>
									</tr>
									<tr>
										<td>Date</td>
										<td>:</td>
										<td><input type="date" name="date" required> <input type="time" name="time" required></td>
									</tr>
									<tr>
										<td>Time</td>
										<td>:</td>
										<td>
											<input onclick="calculate()" type="radio" id="radio1" name = "clock" value="Monday"> Anytime Monday (Discount up to 30%) </br>
											<input onclick="calculate()" type="radio" id="radio2" name = "clock" value="12pm_Weekday"> 12:00 Weekday (Discount up to 30%) </br>
											<input onclick="calculate()" type="radio" id="radio3" name = "clock" value="3pm" checked> 15:00 </br>
											<input onclick="calculate()" type="radio" id="radio4" name = "clock" value="6pm"> 18:00 </br>
											<input onclick="calculate()" type="radio" id="radio5" name = "clock" value="9pm" > 21:00 </br>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>
								<table width="100%">
									<tr>
										<td><span style="color: red;font-size: 23px;font-weight: bold;">Total</span></td>
									</tr>
									<tr>
										<td>Price</td>
										<td>:</td>
										<td><input type="text" value="" name="total" id="total" readonly></td>
									</tr>
									
									
								</table>
							</td>
						</tr>
						<tr>
							<td>
								<table width="100%">
									<tr>
										<td></td>
									</tr>
									<tr>
										<td></td>
										<td></td>
										<td><button type="submit" value="" style="padding: 10px;background-color: green;border: 1px solid green;" >Submit</button></td>
									</tr>
									
									
								</table>
							</td>
						</tr>
					</table>
				</td>
				<td width="33%"></td>
			</tr>
		</table>
		</form>
		<table width="100%">
			<tr>
				<td width="20%"></td>
				<td width="60%" style="text-align: justify;">
					
					<br>
					<br>
					<table width="100%">
						<tr>
							<td width="30%"><span style="font-family: Apple Chancery, cursive;font-size: 28px;color: yellow;">Standard Seats</span></td>
							<td width="35%"><img src="images/ceat1.jpg" style="width:300px;height: 300px;"  width="100%"></td>
							<td width="35%"><img src="images/ceat2.jpg" style="width:300px;height: 300px;" width="100%"></td>
						</tr>
						<tr>
							<td><span style="font-family: Apple Chancery, cursive;font-size: 28px;color: yellow;">First Class Seats</span></td>
							<td><img src="images/first1.jpg" style="width:300px;height: 300px;" width="100%"></td>
							<td><img src="images/first2.jpg" style="width:300px;height: 300px;" width="100%"></td>
						</tr>
					</table>
					
					
					
					
				</td>
				<td width="20%"></td>
			</tr>
		</table>
	</div>

	


	
</body>
</html>
		<?php
	}else{
		header("Location: index.php");
		die();
	}

?>
