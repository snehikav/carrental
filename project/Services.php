<!DOCTYPE html>
<!--Created by project 8 -->
<html>
	<head>
  		<title>SAA Car Rental</title>
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

        /* Table background */
        table { background-color: lightgray;
        border-collapse: collapse;
        border: 1px solid gray;}
        td {padding: 5px;}
        tr:nth-child(odd)

        </style>
	</head>
	<body>

			<div class="topnav"> <!-- used for Menu buttons -->
  			<a class="active" href="Home.php">SAA Car Rentals</a>
  			<a href="Home.php">HOME</a>
  			<a href="Services.php">SERVICES</a>
  			<a href="About.html">ABOUT</a>
			</div>

			<body background="Carlogo.jpg">

			<!-- Display car types -->

			<h1> Car variants </h1>

			<h3> Economy : Kia Rio or Similar </h3>
			<img width="300" height="200" src="Kia.jpg">

			<p> 4 Seater </br>
			Air conditioning </br>
			Automatic Transmaission </br>
			Rent per day: 30$ </br>


			<h3> SUV : Honda CRV or Similar </h3>
			<img width="300" height="200" src="CRV.jpg">

			<p> 5 Seater </br>
			Air conditioning </br>
			Automatic Transmaission </br>
			Rent per day: 50$ </br>
			</p>

			<h3> Luxury : Buick LaCrosse </h3>
			<img width="300" height="200" src="Buick.jpg">

			<p> 5 Seater </br>
			Air conditioning </br>
			Automatic Transmaission </br>
			Rent per day: 100$ </br>
			</p>

			<!-- Pull inventory from Database  -->

			<h1>Available Rental Cars</h1>
        	<form method = "POST" action="#">
				<p>Select a field to display:
                <!--  add a select box containing options -->
                <!-- for SELECT query -->
            	<select name = "select">
                <option selected value="*">All Cars</option>
                <option value="type, model">Car Type and Model</option>
                <option value = "model, price">Car Model and Price</option>

            	</select> </p>

         		<p><input type = "submit" value = "View Cars" name="selectQuery"></p>

        	</form>
       		<?php
            //if the form has been submitted, then display the results page
            if (isset($_POST['selectQuery'])) {include('project8_inc_QueryDatabase.php');} // end if

            ?>
	</body>
</html>
