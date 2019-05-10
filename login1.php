<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'project';
   
   $conn = mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname");
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }

    $username = $_POST["username"];
    $password = $_POST["password"];

   
    $sql = "SELECT * FROM login where username = '$username' and password = '$password'";
   mysqli_select_db($conn,$dbname);
   $retval = mysqli_query($conn, $sql );

if($retval == 1) {
    session_start();
       header("location:inside.html");
      }else {
        echo"fail";
      }
   mysqli_close($conn);
?>
