<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){

    if((!is_numeric($_POST["Custname"])) && (is_numeric($_POST["Age"]))){//validating the input data

        if((($_POST["Age"])>=18) && ($_POST["Age"])<=75){// age validation
            if(!empty($_POST["car_type"])){
                if(!empty($_POST["select_day"])){
                    if(($_POST["start_date"])>=(date("Y-m-d"))){//date format

                        echo Calculation();//declaring function calculation()
                    }else{
                        $CustomerName = ucfirst($_POST["Custname"]); // Uppercase format
                        echo $CustomerName . ", you can't select older date.";

                    }

               }else{
                    echo "Select no of days, you need car.";
                    }

               }else{
                    echo "Select Car Type";
                    }
               }else{
                    echo "You cant book a reservation as you are not between 18 and 75 years.";
                }
         }else{

            echo "Please enter valid input";

         }

}//close if

?>
<?php
function Calculation(){ //start function
    $CustomerName = ucfirst($_POST["Custname"]);
	echo "<h4>Hi, " . $CustomerName . "! You have selected " . ($_POST["car_type"]) . " car for " . ($_POST["select_day"]) . " days.<br/><h4>";
	$Days=$_POST["select_day"];
	$date=date_create($_POST["start_date"]);
	date_add($date,date_interval_create_from_date_string("$Days days"));
	echo "Your car return date is: " . date_format($date,"m-d-Y"). "<br/>";

	$cartype = $_POST["car_type"];
	echo "Your Bill for " . $cartype . " car is:<br/>";
	switch ($cartype){

	       case "Economy":
	               echo $cartype . " price per day is $30<br/>";
	               echo "Pick up location is: " . $_POST["Select_location"]. "<br/>";
	               echo "Tax: 9.25% <br/>";
	               $Total =$Days * 30;

	               $Total=$Total+($Total *(9.5/100));
		           echo "Total Bill for " . $Days. " days is: " . $Total;
		           break;

		   case "Luxury":
		            echo $cartype . " price per day is $100<br/>";
		            echo "Pick up location is: " . $_POST["Select_location"]. "<br/>";
		            echo "Tax: 9.25% <br/>";
		            $Total =$Days * 100;

		            $Total=$Total+($Total *(9.5/100));
		            echo "Total Bill for " . $Days. " days is: " . $Total;
		            break;

		   case "SUV":
		            echo $cartype . " price per day is $50<br/>";
		            echo "Pick up location is: " . $_POST["Select_location"]. "<br/>";
		            echo "Tax: 9.25% <br/>";
		            $Total =$Days * 50;

		            $Total=$Total+($Total *(9.5/100));
		            echo "Total Bill for " . $Days. " days is: " . $Total;
		            break;

		   default:
		            echo "No car selected.";

		    }


		}// end function

?>
