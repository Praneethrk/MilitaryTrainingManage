<?php

session_start();
    //check to see whether the user is logged in or not
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $db_name="project";
$tbl_name="officer";
   
   $conn = mysqli_connect("$dbhost","$dbuser","$dbpass","$db_name");
  

      $name = $_GET["name"];
    $id = $_GET["id"];
    $rank = $_GET["rank"];

$sql = "UPDATE officer SET name='$name',id='$id',rank='$rank' WHERE id=$id";
   mysqli_select_db($conn,$db_name);
   $retval = mysqli_query($conn, $sql );
   
if($retval) {
         header("location: officerCourse.php");
      }else {
         die('failed to update: ' . mysqli_error());
      }
   mysqli_close($conn);
?>
