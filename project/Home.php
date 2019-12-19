<!DOCTYPE html>
<!--Created by project 8 -->
<html>
	<head>
  		<title>S Car Rental</title>
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		body, html {
		height: 100%;
		margin: 5;


		/* The image used */
		background-image: url("Carlogo.jpg");

		/* Full height */
		height: 100%;

		/* Center and scale the image nicely */
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		}
		.topnav {
			overflow: hidden;
			background-color: #333;
		}
		.topnav a {
			float: left;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 17px;
		}
		.topnav a:hover {
			background-color: #ddd;
			color: black;
		}
		.topnav a.active {
			background-color: #4CAF50;
			color: white;
		}
		.topnav a.active {
			float: right;
			background-color: #4CAF50;
			color: white;
		}

	</style>
	</head>
	<body>

	<div class="topnav"> <!-- used for Menu buttons -->
		<a class="active" href="Home.php">CAR RENTALS</a>
		<a href="Home.php">HOME</a>
		<a href="Services.php">SERVICES</a>
		<a href="About.html">ABOUT</a>
	</div>

	<body background="Carlogo.jpg"> <!-- Used for backgroung image -->


		<form action = "Home.php" method = "POST">

			<h3> Welcome to Car Rentals </h3>
			<h4> Enter following details to book a car </h4>
			<!-- Input customer details -->
			<h4> Enter your details: </h4>
			<p>Customer Name:<input type = "text" name = "Custname" placeholder = "Enter Name" required></p>
			<p>Age: <input type = "text" name = "Age" placeholder = "Enter Age 18 - 75" required> </p>
			<label for="input-val11"><span>Select a Car</span>
        		<select id="car_type" name="car_type" class="" required>
				<!-- Select type of car -->
                <option value=""> Select Car</option>
                <option value="Economy"> Economy</option>
                <option value="Luxury"> Luxury</option>
                <option value="SUV"> SUV</option>
                </select>

			</label>
			<br><br>
			<!-- Select no of days -->
			<label for="input-val12"><span>No of Days</span>
                <select name="select_day" id="select_day" required>
                <option value=""> Select Day</option>
                <option value="1"> 1 Day</option>
                <option value="2"> 2 Days </option>
                <option value="3"> 3 Days </option>
                <option value="4"> 4 Days </option>
                <option value="5"> 5 Days </option>
                <option value="6"> 6 Days </option>
                <option value="7"> 7 Days </option>
                </select>
			</label>

			<br><br>

			<h4> Select start date and Pickup location: </h4>
			<span>Start Date</span>


			<input  name="start_date" id="start_date"  type="date" required>
			<br><br>
			<label for="input-val12"><span>Pick Up location</span>
			<select name="Select_location" id="Select_location" required>
			<!--<option value=""> Select Location</option>-->
			<option value="Kansas Airport"> Kansas Airport</option>
            <option value="Lee Sumit"> Lee Sumit</option>
            <option value="Warrensburg"> Warrensburg</option>
            <option value="DFW Airport"> DFW Airport</option>
            <option value="DAL Airport"> DAL Airport</option>
            <option value="Dallas"> Dallas</option>
            </select>
			</label>

			<br><br>


			<span><input type = "submit" name = "Booknow" value = "Book Now">
			<input type = "reset" value = "Reset" name = "clear">
			</span>
			<br><br>

			<?php include('Code.php')?> <!-- Including php code for validation and final price calculation. -->


		</form>
		<form action="Javascript.html" method="POST">
			<p>--------------------------------------------------------------</p>
			<h4>Returning a car? Click on Return Car:</h4>
			<span><input type = "submit" name = "return" value = "Return Car">

			</span>
			<br><br>


		</form>

		<span style=" bottom: 10pt; right: 10pt;">
		<marquee behavior="scroll" direction="left";>
		<img src="Kia.jpg" width="125" height="82">
		<img src="CRV.jpg" width="125" height="82">
		<img src="Buick.jpg" width="125" height="82">
		</marquee>
		</span>

	</body>
</html>
