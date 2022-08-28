<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
cursor: pointer;
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
				<a href="index.php" style="text-decoration: none;"><img src="images/logo.png" style="width: 50%;"><p style="font-family: Impact, fantasy;font-size: 50px;color: #3A3A3C;margin-top: -10px;color: orange;">Lunardo Cinema</p></a>
			</td>
			<td width="33%"></td>
		</tr>
		<tr>
			<td></td>
			<td align="center">
				<a href="index.php#about" style="text-decoration: none;"><span class="navi-btn">ABOUT US</span></a>
				<a href="index.php#price" style="text-decoration: none;"><span class="navi-btn">PRICES</span></a>
				<a href="index.php#shows" style="text-decoration: none;"><span class="navi-btn">SHOWS</span></a>
			</td>
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

	<div style="margin-top: 6%;background-image: url('images/theatre_2.jpg'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;width: 102%;margin-left: -1%;" id="price">
		<table width="100%">
			<tr>
				<td width="33%"></td>
				<td width="33%" align="center"><span class="sub-head">PRICES</span></td>
				<td width="33%"></td>
			</tr>
			<tr>
				<td width="33%"></td>
				<td width="33%" align="center">
					<table width="100%">
						<tr style="background-color: #c6c6c6;">
							<th align="left" style="padding: 13px;">Seat Type</th>
							<!-- <th align="left" style="padding: 13px;">Seat Code</th> -->
							<th align="left" style="padding: 13px;">Price</th>
						</tr>
						<tr style="background-color: #eafffc;">
							<td style="padding: 5px;">Standard Adult</td>
							<!-- <td style="padding: 5px;">STA</td> -->
							<td style="padding: 5px;">20.50</td>
						</tr>
						<tr style="background-color: #eafffc;">
							<td style="padding: 5px;">Standard Concession</td>
							<!-- <td style="padding: 5px;">STP</td> -->
							<td style="padding: 5px;">18.00</td>
						</tr>
						<tr style="background-color: #eafffc;">
							<td style="padding: 5px;">Standard Child</td>
							<!-- <td style="padding: 5px;">STC</td> -->
							<td style="padding: 5px;">12.00</td>
						</tr>
						<tr style="background-color: #eafffc;">
							<td style="padding: 5px;">First Class Adult</td>
							<!-- <td style="padding: 5px;">FCA</td> -->
							<td style="padding: 5px;">24.00</td>
						</tr>
						<tr style="background-color: #eafffc;">
							<td style="padding: 5px;">First Class Concession</td>
							<!-- <td style="padding: 5px;">FCP</td> -->
							<td style="padding: 5px;">22.50</td>
						</tr>
						<tr style="background-color: #eafffc;">
							<td style="padding: 5px;">First Class Child</td>
							<!-- <td style="padding: 5px;">FCC</td> -->
							<td style="padding: 5px;">21.00</td>
						</tr>
						
					</table>
				</td>
				<td width="33%"></td>
			</tr>
		</table>
		<table width="100%">
			<tr>
				<td width="20%"></td>
				<td width="60%" style="text-align: justify;">
					
					<br>
					<br>
					<table width="100%">
						<tr>
							<td width="30%"><span style="font-family: Apple Chancery, cursive;font-size: 28px;color: yellow;">Standard Seats</span></td>
							<td width="35%"><img src="https://titan.csit.rmit.edu.au/~e54061/git-repo/media/Profern-Standard-Twin.png" style="width:300px;height: 300px;"  width="100%"></td>
							<!-- <td width="35%"><img src="images/ceat2.jpg" style="width:300px;height: 300px;" width="100%"></td> -->
						</tr>
						<tr>
							<td><span style="font-family: Apple Chancery, cursive;font-size: 28px;color: yellow;">First Class Seats</span></td>
							<td><img src="https://titan.csit.rmit.edu.au/~e54061/git-repo/media/Profern-Verona-Twin.png" style="width:300px;height: 300px;" width="100%"></td>
							<!-- <td><img src="images/first2.jpg" style="width:300px;height: 300px;" width="100%"></td> -->
						</tr>
					</table>
					
					
					
					
				</td>
				<td width="20%"></td>
			</tr>
		</table>
	</div>

	<div style="background-image: url('images/theatre3.jpg'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;width: 102%;margin-left: -1%;" id="shows">
		<table width="100%">
			<tr>
				<td width="33%"></td>
				<td width="33%" align="center"><span class="sub-head">SHOWS</span></td>
				<td width="33%"></td>
			</tr>
		</table>
		<table width="100%">
			<tr>
				<td width="20%"></td>
				<td width="60%">
					<table width="100%">
						<tr>
							<td>
								<div class="flip-card">
							  <div class="flip-card-inner">
							  	<div class="flip-card-front">
									Lightyear | PG | 1h 40m  
								<img src="https://titan.csit.rmit.edu.au/~s3918372/media/lightyear.jpg" alt="Avatar" style="width:200px;height:auto;">
								</div>
								<div class="flip-card-back">
								  <h1>Sea Beast</h1>
								  <p style="text-align:justify;">While spending years attempting to return home, marooned Space Ranger Buzz Lightyear encounters an army of ruthless robots commanded by Zurg  who are attempting to steal his fuel source.</p>
								  <p> Source: <a href="https://www.imdb.com/title/tt10298810" target="_blank">imdb</a>
										<br><br>Mon - Tue (12:00) <br>
										Wed - Fri (18:00) <br>
										Sat - Sun (12:00)<br>
									<a href="booking.php?movie=Sea Beast">
										<button type="button" class="book-btn">
											Book Now
										</button>
									</a>	
								  </p>
								</div>
								</div>
				   </div>
							</td>
							<td>
								<div class="flip-card">
				  <div class="flip-card-inner">
				  	<div class="flip-card-front">
						Prithviraj | 2h 15m 
					<img src="https://titan.csit.rmit.edu.au/~s3918372/media/prithviraj.jpg" alt="Avatar" style="width:200px;height:auto;">
					</div>
					<div class="flip-card-back">
					  <h1>Samrat Prithviraj</h1>
					  <p>A fearless warrior. An epic love story. Witness the grand saga of Samrat Prithviraj Chauhan.</p>
					  <p> Source: <a href="https://www.imdb.com/title/tt9637132" target="_blank">imdb</a>
							<br><br>Mon - Tue (12:00) <br>
							Wed - Fri (18:00) <br>
							Sat - Sun (12:00)<br>
						<a href="booking.php?movie=Prithviraj">
							<button type="button" class="book-btn">
								Book Now
							</button>
						</a>	
					  </p>
					</div>
					</div>
				   </div>
							</td>
							<td>
								<div class="flip-card">
				  <div class="flip-card-inner">
				  	<div class="flip-card-front">
						Mrs Harris Goes to Paris | PG | 1h 55m
					<img src="images/luck.png" alt="Avatar" style="width:200px;height:auto;">
					</div>
					<div class="flip-card-back">
					  <h1>Mrs Harris Goes to Paris</h1>
					  <p>A widowed cleaning lady in 1950s London falls madly in love with a couture Dior dress, and decides that she must have one of her own.</p>
					  <p> Source: <a href="https://www.imdb.com/title/tt5151570" target="_blank">imdb</a>
							<br><br>Mon - Tue (12:00) <br>
							Wed - Fri (18:00) <br>
							Sat - Sun (12:00)<br>
						<a href="booking.php?movie=Harris Goes to Paris">
							<button type="button" class="book-btn">
								Book Now
							</button>
						</a>	
					  </p>
					</div>
					</div>
				   </div>
							</td>

							
						</tr>
						<tr>
							<td>
								<div class="flip-card">
				  <div class="flip-card-inner">
				  	<div class="flip-card-front">
						Prey | PG | 2h 28m 
					<img src="images/prey.png" alt="Avatar" style="width:200px;height:auto;">
					</div>
					<div class="flip-card-back">
					  <h1>Prey</h1>
					  <p>The origin story of the Predator in the world of the Comanche Nation 300 years ago. Naru, a skilled warrior, fights to protect her tribe against one of the first highly-evolved Predators to land on Earth.</p>
					  <p> Source: <a href="https://www.imdb.com/title/tt11866324/" target="_blank">imdb</a>
							<br><br>Mon - Tue (12:00) <br>
							Wed - Fri (18:00) <br>
							Sat - Sun (12:00)<br>
						<a href="booking.php?movie=Prey">
							<button type="button" class="book-btn">
								Book Now
							</button>
						</a>	
					  </p>
					</div>
					</div>
				   </div>
							</td>

							<td>
								<div class="flip-card">
				  <div class="flip-card-inner">
				  	<div class="flip-card-front">
						Top Gun: Maverick | PG-13 | 2h 10m 
					<img src="images/nomad.png" alt="Avatar" style="width:200px;height:auto;">
					</div>
					<div class="flip-card-back">
					  <h1>Top Gun: Maverick</h1>
					  <p>A woman in her sixties, after losing everything in the Great Recession, embarks on a journey through the American West, living as a van-dwelling modern-day nomad.</p>
					  <p> Source: <a href="https://www.imdb.com/title/tt1745960" target="_blank">imdb</a>
							<br><br>Mon - Tue (12:00) <br>
							Wed - Fri (18:00) <br>
							Sat - Sun (12:00)<br>
						<a href="booking.php?movie=Top Gun">
							<button type="button" class="book-btn">
								Book Now
							</button>
						</a>	
					  </p>
					</div>
					</div>
				   </div>
							</td>

						
						</tr>
					</table>
					
				</td>
				<td width="20%"></td>
			</tr>
		</table>
	</div>

	<div style="background-image: url('images/theatre4.jpg'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;width: 102%;margin-left: -1%;" id="about">
		<table width="100%">
			<tr>
				<td width="33%"></td>
				<td width="33%" align="center"><span class="sub-head">ABOUT US</span></td>
				<td width="33%"></td>
			</tr>
			<table width="100%">
				<tr>
				<td width="20%"></td>
				<td width="60%" style="text-align: justify;"><span style="font-family: Apple Chancery, cursive;font-size: 28px;">Lunardo is a theatre. It was established on 2001. It has served this Marysville community for last 20 years. Recently Lunardo had an extensive upgrade of this theatre. There are new seats: standard seats and reclinable first class seats.The projection and sound systems are upgraded with 3D Dolby Vision projection and Dolby Atmos sound. Now Lunardo is more luxurious. It has 3d and 5d movie experience now. Eager to welcome you back to Lunardo. </span></td>
				<td width="20%"></td>
			</tr>
			<tr>
				<td width="20%"></td>
				<td width="60%" style="text-align: justify;">
					<span style="font-family: Apple Chancery, cursive;font-size: 28px;"><br><br>⚫ All of our theatres now have Dolby Atom sound system and 3D Dolby vision.</span>
					<br>
					<br>
					<img src="images/cinema1.jpg" style="margin-left: 25%;" width="50%">
					<img src="images/cinema2.jpg" style="margin-left: 25%;" width="50%">
				</td>
				<td width="20%"></td>
			</tr>
			<tr>
				<td width="20%"></td>
				<td width="60%" style="text-align: justify;">
					<span style="font-family: Apple Chancery, cursive;font-size: 28px;"><br><br>⚫ After renovation look</span>
					<br>
					<br>
					<table width="100%">
						<tr>
							<td><img src="images/studio2.jpg" style="width:300px;height: 300px;"  width="100%"></td>
							<td><img src="images/chair.jpg" style="width:300px;height: 300px;" width="100%"></td>
						</tr>
						<tr>
							<td><img src="images/chair2.jpg" style="width:300px;height: 300px;" width="100%"></td>
							<td><img src="images/studio3.jpg" style="width:300px;height: 300px;" width="100%"></td>
						</tr>
					</table>
					
					
					
					
				</td>
				<td width="20%"></td>
			</tr>
			</table>
		</table>
	</div>
	<div style="background-image: url('images/theatre4.jpg'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;width: 102%;margin-left: -1%;" id="about">
		<table width="100%">
			<tr>
				<td width="33%"></td>
				<td width="33%" align="center"><span class="sub-head">CONTACT US</span></td>
				<td width="33%"></td>
			</tr>
			<table width="100%">
				<tr>
				<td width="20%"></td>
				<td width="60%" style="text-align: justify;"><span style="font-family: Apple Chancery, cursive;font-size: 28px;">Ph: 03 1234 5678<br>E-mail: s3918372@student.rmit.edu.au<br>Fax: 03 2222 3333<br>Location: 123 rmit St, testingtown, Vic - 3779</span></td>
				<td width="20%"></td>
			</tr>
		
			</table>
		</table>
	</div>


	
</body>
</html>