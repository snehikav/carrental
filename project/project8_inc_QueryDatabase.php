<?php
         //include the php fucntion file here to access teh database:
         include ("project8_inc_phpFunctions.php");
         
         //Getting the variables from teh post autoglobals for forming the query based on 
         //what was selected by the user from the dropdown:
         
         $select = $_POST["select"];
         $result; //stores the result of teh query.
         $result = getCars($select);
         
         /*try {
           //call the function and store the result in a variable:
            
             If(!$result) {
                  throw new Exception("Select Query failed ");
              }  //end if
           } catch (Exception $e) {
           
            die("Error: " . $e->getMessage()); // error handling
            
            } //end try/catch. */
         ?>
            
    <!--  <h3>Query: "SELECT <?php print ( "$select" )?>
             FROM rentals"</h3> -->
             
             
      <table>
         <!-- <caption><b>Results</b></caption> -->
          <tr>
            <?php 
            switch ($select) {
                case "*":
                    echo 
                    "<th>Type</th><th>Model</th><th>"."$"."Price</th>";
                    break;
                case "type, model":
                    echo "<th>Type</th><th>Model</th>";
                    break;
                case "type, price":
                     echo "<th>Type</th><th>"."$"."Price</th>";
                    break;

                default:
                    echo "<th>Type</th><th>"."$"."Price</th>";
                    break;
					
            } //end switch 
            ?>
      </tr>
      
     <?php 
        //fetch each record in result set
        
     while ($row = $result->fetch_assoc ()){
         //fetch_assoc returns an associative array that corresponds to teh fetched row or Null if there are no more rows
         
         //build table to dispaly results in the following lines
         print( "<tr>");
         
         //below is the simplest way using for each loop.
         
         foreach ( $row as $value) {
             print ("<td>$value</td>");
         } //end for each
         
         print ("</tr>");
         
     } //end while
             
    ?> <!--  end PHP script -->

      </table>  <br>   
      
 