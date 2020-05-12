<?php

session_start();
$city = $_GET['city'];
$_SESSION["city"] = $city;
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
    
    <h2 align="center"> COUNTRY: <?php echo  $_SESSION["country"];?> </h2>
    <h2 align="center"> STATE: <?php echo  $_SESSION["state"];?> </h2>
    <h2 align="center"> CITY: <?php echo  $_SESSION["city"];?> </h2>

    </div>
    
</body>
</html>