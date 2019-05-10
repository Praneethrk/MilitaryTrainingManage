<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="project";
$tbl_name="officer";
$conn=mysqli_connect("$servername","$username","$password","$dbname")or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";

#if(isset($_POST['submit'])&&($_POST['username'])&&($_POST['password'])&&($_POST['emial']))
#{
$name=$_POST['name'];
$id=$_POST['id'];
$rank=$_POST['rank'];
$q="SELECT * FROM officer WHERE name='$name'";
$cq=mysqli_query($conn,$q)or die(mysqli_error($conn));
$ret=mysqli_num_rows($cq);
if($ret==true)
{
echo "Already Exits";
}
else
{
$query="INSERT INTO officer VALUES ('$name','$id','$rank')";
mysqli_query($conn,$query)or die(mysqli_error($conn));
    echo"Success";
}
#}
Mysqli_close($conn);
?>