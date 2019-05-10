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

   
   $sql = "SELECT * FROM officer where id= '$id'";
   mysqli_select_db($conn,$db_name);
   $retval = mysqli_query($conn, $sql );
   $row = mysqli_fetch_array($retval);
        
    


?>

<!DOCTYPE html>
<html>

<head>
    <title>PMC</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" />
</head>

<body>
    
    <!-- The main content goes here-->
    <div class="container mt-5">
        <center>
            <h1 class="text-white">Edit</h1>
        </center><br/>
        <div class="container edit-form-div">
            
             <form action='update.php' method='get'>
                        <div class="form-group">
                            <label for="medId">Name</label>
                            <input type="text" name='name' class="form-control" id="medId" value=<?php echo $row['name'];?> >
                        </div>
                        <div class="form-group">
                            <label for="medName">ID</label>
                            <input type="text" name='id' class="form-control" id="medName" value=<?php echo $row['id']; ?> readonly>
                        </div>
                        <div class="form-group">
                            <label for="medCost">Rank</label>
                            <input type="number" name='rank' class="form-control" id="medCost"  value=<?php echo $row['rank']?>>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" id='add-btn'>Update data</button>
                        </div>
                    </form>
        </div>
       
    </div>

    <!--Script tags-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
