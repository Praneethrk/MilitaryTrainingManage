<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="users";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($conn,$sql)or die(mysqli_error($connection));
if(isset($_POST['submit'])&&($_POST['username'])&&($_POST['password'])&&($_POST['phone']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$q="SELECT email FROM users WHERE email='$email'";
$cq=mysqli_query($conn,$q)or die(mysqli_error($conn));
$ret=mysqli_num_rows($cq);
if($ret==true)
{
echo "Already Exits";
}
else
{
$query="INSERT INTO users VALUES('','$username','$password','$email','$phone')";
mysqli_query($conn,$query)or die(mysqli_error($conn));
header("location:index.php");
}
}
else
{
    include("index.php");
    echo"<script>
    $('#signupModal').modal('toggle');
    $('#form-info').html('All Fields are mandatary');
    </script>";
}
Mysqli_close($conn);
?>