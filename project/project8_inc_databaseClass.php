<!DOCTYPE html>
<?php
/**************************************************************
 * DATA CLASS FILE
 * ************************************************************
 Created by project8
*/

class DatabaseClass {
    protected static $connection; //This is a property
    
    /**************** Connect Fucntion ******************/
    public function connect () { // this is a method in database class
        //Try and connect to teh database
        if (! isset ( self::$connection)) { //if not connection set already
            include ("project8_inc_dbConfig.php");
            self::$connection = new mysqli ($host, $username, $password, $dbname);
        }
        //if connection was not successful, handle the error
        if (self::$connection === false) {
            //Handle error - notify administrator, log to a file, shown an error screen etc
            return false;
        } 
        return self::$connection;
    } //end function connect
        
      /****************** Query Fucntion **************/
        public function Select($query) {
            //connect to the database
        $connection = $this->connect();
        //Query the database
        $result = $connection->query ($query);
        if(!$result) {
            return $connection->error;
        } else {
            return $result; //returns te result
        }
    }// end fucntion Select()
    
    public function error() {
    //gets the last error from teh database
        $connection = $this->connect();
        return $connection->error;
    }// end function error
        
        

} // end class

?>