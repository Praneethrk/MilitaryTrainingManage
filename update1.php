<?php

session_start();
    //check to see whether the user is logged in or not
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $db_name="project";
$tbl_name="courses";
   
   $conn = mysqli_connect("$dbhost","$dbuser","$dbpass","$db_name");
  

      $Course_name = $_GET["Course_name"];
    $Officer_name = $_GET["Officer_name"];
    $Course_id = $_GET["Course_id"];
    $duration = $_GET["duration"];
    $Officer_id = $_GET["Officer_id"];
    $course_type = $_GET["course_type"];

$sql = "UPDATE courses SET Course_name='$Course_name',Officer_name='$Officer_name',duration='$duration',Officer_id='$Officer_id',course_type='$course_type' WHERE Course_id=$Course_id";
   mysqli_select_db($conn,$db_name);
   $retval = mysqli_query($conn, $sql );
   
if($retval) {
         header("location: officerCourse.php");
      }else {
         die('failed to update: ' . mysqli_error());
      }
   mysqli_close($conn);
?>
