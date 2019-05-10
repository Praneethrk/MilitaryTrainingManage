<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="project";
$tbl_name="courses";
$conn=mysqli_connect("$servername","$username","$password","$dbname")or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";

#if(isset($_POST['submit'])&&($_POST['username'])&&($_POST['password'])&&($_POST['emial']))
#{
$Course_name=$_POST['Course_name'];
$Officer_name=$_POST['Officer_name'];
$Course_id=$_POST['Course_id'];
$duration=$_POST['duration'];
$Officer_id=$_POST['Officer_id'];
$course_type=$_POST['course_type'];

$q="SELECT * FROM courses WHERE Course_name='$Course_name'";
$cq=mysqli_query($conn,$q)or die(mysqli_error($conn));
$ret=mysqli_num_rows($cq);
if($ret==true)
{
echo "Already Exits";
}
else
{
$query="INSERT INTO courses VALUES ('$Course_name','$Officer_name','$Course_id',$duration,'$Officer_id','$course_type')";
mysqli_query($conn,$query)or die(mysqli_error($conn));
    echo"Success";
}
#}
Mysqli_close($conn);
?>