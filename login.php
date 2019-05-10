<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="project";
$tbl_name="adminlogin";
$con=mysqli_connect("$host","$username","$password","$db_name")or die("cannot connect");
$select_db=mysqli_select_db($con,$db_name)or die("cannot select DB");

$username=$_POST['username'];
$pswd=$_POST['password'];
$ab="SELECT * FROM adminlogin WHERE username='$username' and password='$pswd'";
$result=mysqli_query($con,$ab) or die(mysqli_error($con));
$cnt=mysqli_num_rows($result);
if($cnt==true)
{
   header("location:inside.html");
}
else
{   
echo "<center><h2 style='color:red'>ACCESS DENIED</h2></center>";
}

ob_end_flush();
?>