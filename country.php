<?php

session_start();

$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "priyank";

// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT DISTINCT country FROM assignment3 ";
$country_results = mysqli_query($conn, $sql);

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
    <header><h1 align="center">PHP connect SQL</h1></header><br>


    <div class="pageContainer">
    <h4 align="center">SELECT COUNTRY</h4>

    <form method="get" action="state.php" autocomplete="on" class="formLayout">

            <div class = "container">

            <div class="form-group">
                <div class="form-group col-md-6">
                <label for="country"> Select Country</label>
                <select class="form-control" required name="country">
                <?php while($row = mysqli_fetch_assoc($country_results)){ ?>
                <option value="<?php echo $row['country'];?>"><?php echo $row['country'];?></option>
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