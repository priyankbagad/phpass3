<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Gym Membership</title>
    <link rel="stylesheet" type="text/css" href="forms.css">
  </head>

  <body>
     <div class="container">
      <h1><b>X-Fitness</b></h1>
      <h3><i>FUN.FAST.FIT</i></h3>
      <form method="get" action="newvalidation.php" autocomplete="on" class="formLayout">
            <div class="formGroup">
               <label>Email:</label>
               <input type="email" name="email" class="textbox" required placeholder="Email" maxlength="50" autofocus />
            </div>
            <div class="formGroup">
               <label>First name:</label>
               <input type="text" name="fname" class="textbox" autofocus required  
                      placeholder="First name" title="first name" maxlength="20" pattern="[A-Za-z'-]{2,20}" />
            </div>
            <div class="formGroup">
               <label>Birthday:</label>
               <input type="date" name="birthday" class="textbox"  required 
                      placeholder="yyyy/mm/dd" title="birthday yyyy/mm/dd" />
            </div>
            <div class="formGroup">
               <label>Age:</label>
               <!-- using pattern since type="number" poorly supported -->
               <input type="text" name="age"class="textbox"  style="width:100px;" required 
                      placeholder="age" title="age (1-99)" pattern="[1-9][0-9]?" />
            </div>
            <div class="formGroup">
               <label>Phone: </label>
               <input type="text" name="phone" class="textbox" required placeholder="Phone" maxlength="10" autofocus />
            </div>
            <div class="formGroup">
               <label>State:</label>
               <input type="text" name="state" class="textbox" style="width:100px" required 
                      placeholder="ST" title="2-character state abbreviation" maxlength="2" pattern="[A-Za-z]{2}" />
            </div>
            <div class="formGroup">
               <label>Zip: </label>
               <input type="text" name="zip" class="textbox" style="width:100px;" required 
                      placeholder="Zip" title="6-digit zip" maxlength="6" pattern="[0-9]{6}" width="90px" />
            </div>
            <div class="formGroup">
               <label></label>
               <button type="submit">Submit!</button>
            </div>
            <div class="formGroup vertGap55">
               <label></label>
               <button type="submit" formnovalidate>Submit without validation</button>
            </div>
           
         </form>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>