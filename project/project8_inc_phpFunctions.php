<?php
/*****************************************************************
 * PHP FUNCTIONS FILE
 *****************************************************************/
// include the database class file:
include ("project8_inc_databaseClass.php");
//Methods for Delete Page
function getCars($select) {
    $dbClass = new DatabaseClass;
    //Build Query
    $selectSql = "SELECT " . $select . " FROM rentals";
    
    //call the select query method of the dbclass:
    try {
        $result = $dbClass->Select($selectSql);
        //
        if($result){
            return $result;
        } //end if
    } catch (Exception $e) {
        echo "<script>window.alert(".$e->getMessage().") </script>";
        
    } //end try/catch    
} //end function getCars()

?>