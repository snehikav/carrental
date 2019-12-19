<!DOCTYPE html>
<html>
    <head>
        <!-- Created by Project 8         -->
    <meta charset = "utf-8">
    <title> Simple Database Query</title>
       <style type = "text/css">
       body { font-family:sans-serif;
              background-color : lightyellow;
              margin: 50px;}
       table { background-color : lightgray;
               border-collapse: collapse;
               border: 1px solid gray; }
       td    { padding: 5px; }
       tr:nth-child(odd) {
             background-color: white; }
       </style>     
    </head>
    <body>
        <h1>Querying a MySQL database</h1>
        <form method = "POST" action="#">
           <p>Select a field to display:
           <!--  add a select box containing options -->
           <!-- for SELECT query -->
           <select name = "select">
                <option selected value="*">All columns in the table</option>
                <option value="type, model">Car Type and Model</option>
                <option value = "model">Car Model</option>
                
            </select> </p>
            
         <p><input type = "submit" value = "Select Query" name="selectQuery"></p>   
  
        </form>
       <?php 
         //if the form has been submitted, then display the results page
         if (isset($_POST['selectQuery'])) {include('project8_inc_QueryDatabase.php');} // end if
       
       ?>

</body>

</html>
