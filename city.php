<?php

session_start();

$state = $_GET['state'];

$_SESSION["state"] = $state;
echo $state;


$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "priyank";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT DISTINCT city FROM assignment3 WHERE state ='$state'";
$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="en-US">
    
    <head>

    <title>Place Order</title>
      <link href="phpsql.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            body {
                    background-image: url("paper.jpg");
                    background-color: #cccccc;
                }
            div.solid {border-style: solid;}
        </style>
    </head>

    <body>
    <br>
    <br>
    <header><h1 align="center">ASSIGNMENT 3</h1></header><br>


    <div class="pageContainer">
    <h4 align="center">SELECT CITY</h4>

    <form method="get" action="main.php" autocomplete="on" class="formLayout">

            <div class = "container">

            <div class="form-group">
                <div class="form-group col-md-6">
                <label for="city">State</label>
                <select class="form-control" required name="city">
                <?php while($row = mysqli_fetch_assoc($result)){ ?>
                <option value="<?php echo $row["city"];?>"><?php echo $row["city"];?></option>
                <?php } ?>
                </select>
                </div>
            </div>


            <br> 
            </div>
             <button type="submit" class="btn btn-primary" style="margin-left:50px" >NEXT</button>
            </div>

            </div>
        
        </form>
    </div>
    <?php
    mysqli_close($conn);
    ?>
</body>
</html>
