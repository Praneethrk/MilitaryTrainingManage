<?php
session_start();
    //check to see whether the user is logged in or not
?>


<!DOCTYPE html>
<html>

<head>
    <title>BUS DETAILS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="//cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.css" />
    <link rel="stylesheet" href="css/main.css" />


</head>

<body>
    


    <div class="container mt-2 mb-2">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h1 class='text-white'>Candidate Details</h1>
                </center>
            </div>
        </div>
    </div>


    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">
                <?php
             $host="localhost";
$username="root"; 
$password="";
$dbname="project";
$tbl_name="register";
   $con=mysqli_connect("$host","$username","$password","$dbname")or die("cannot connect");
$select_db=mysqli_select_db($con,$dbname)or die("cannot select DB");
    $query = "SELECT * FROM register";
    $res = mysqli_query($con,$query);
    // Check connection

     
     echo "<div class='container table-class'> <div class='row mb-5'>
       
   </div><table id='med-div' class='display responsive nowrap table-active table-dark' style='width:100%;'><thead class='thead-light'><tr><th>Name</th><th>Age</th><th>Height</th><th>Weight</th><th>Qualification</th><th>Email</th><th>Training</th><th>Blood</th></tr></thead><tbody>";
    while($row = mysqli_fetch_array($res))
      {
      echo "<tr><td>".$row['name'] . "</td><td> " . $row['age']. "</td><td> " . $row['height']. "</td><td> " .$row['weight']."</td><td>".$row['qualification']."</td><td>".$row['email']."</td><td>".$row['training']."</td><td>".$row['blood']."</td></tr>"; //these are the fields that you have stored in your database table employee
     
      }
                echo "</tbody></table></div>";

    mysqli_close($con);
    ?>
            </div>
        </div>
    </div>




    <!--Script tags-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"></script>
    

</body>

</html>
