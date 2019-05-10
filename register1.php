<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="project";
$tbl_name="register";
$conn=mysqli_connect("$servername","$username","$password","$dbname")or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($conn,$sql)or die(mysqli_error($connection));
#if(isset($_POST['submit'])&&($_POST['username'])&&($_POST['password'])&&($_POST['emial']))
#{
$name=$_POST['name'];
$age=$_POST['age'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$qualification=$_POST['qualification'];
$email=$_POST['email'];
$training=$_POST['training'];
$blood=$_POST['blood'];
$q="SELECT email FROM register WHERE email='$email'";
$cq=mysqli_query($conn,$q)or die(mysqli_error($conn));
$ret=mysqli_num_rows($cq);
if($ret==true)
{
echo "Already Exits";
}
else
{
$query="INSERT INTO register VALUES ('$name',$age,$height,$weight,'$qualification','$email','$training','$blood')";
mysqli_query($conn,$query)or die(mysqli_error($conn));
include("index.html");
    echo"alert:Success";
}
#}
Mysqli_close($conn);
?>