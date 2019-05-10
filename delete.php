<?php

session_start();
    //check to see whether the user is logged in or not
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $db_name="project";
$tbl_name="officer";
   
   $conn = mysqli_connect("$dbhost","$dbuser","$dbpass","$db_name");
  
    $id = $_GET['id'];

   
    $sql = "DELETE FROM officer where id = '$id'";
   mysqli_select_db($conn,$dbname);
   $retval = mysqli_query($conn, $sql );
   
if($retval) {
         header("location: officerCourse.php");
      }else {
        echo "Deletion failed!";
      }
   mysqli_close($conn);
?>
