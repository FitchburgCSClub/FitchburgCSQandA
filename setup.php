<!DOCTYPE html>
<html lang="en-us">
  <?php
  $title = "Create a Username";
  include 'header.php';

  $studentErr = $emailErr= "";


  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $valid = 1;
    if ( $_POST["student"] == "no")
    {
      $studentErr = "You currently need to a Fitchburg State student or allum";
      $valid = 0;
    }
    elseif ( $_POST["student"] == "yes") {
      $studentErr = "";
    }
    else {
      $studentErr = "Uknown Error";
      $valid = 0;
    }

    if ( empty($_POST["email"]))
    {
      $emailErr = " You need to enter an Email";
      $valid = 0;
    }
    elseif ( $_POST["email"] != $_POST["reEmail"])
    {
      $emailErr = "Your emails do not match";
      $valid = 0;
    }
    else {
      $emailErr = "";
    }
  }
  ?>
 <body>
   <div class="containor">
     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ;?>" method="post"
            role="form" class="form-horizontal">

     <div class="form-group">
       <label class="control-label col-sm-4" for="student">Are/Were you a student at Fitchburg State University?</label>
       <div class="col-sm-4">
         <input type="radio" name="student" value="no" checked="checked"/> No<br>
         <input type="radio" name="student" value="yes"/>Yes
       </div>
       <div class="col-sm-4">
         <span class="error"><?php echo $studentErr; ?></span>
       </div>
     </div>
     <div class="form-group">
       <label class="control-label col-sm-4" for="email">Fitchburg State Email</label>
       <div class="col-sm-4">
         <input type="email" name="email" required="required"/>
       </div>
       <div class="col-sm-4">
         <span class="error"><?php echo $emailErr; ?></span>
       </div>
     </div>
     <div class="form-group">
       <label class="control-label col-sm-4" for="reEmail">Re-type your Fitchburg State Email</label>
       <div class="col-sm-4">
         <input type="email" name="reEmail" required="required"/>
       </div>
     </div>
     <div class="form-group">
       <label class="control-label col-sm-4" for="fName">First Name</label>
       <div class="col-sm-4">
         <input type="text" name="fName" required="required"/>
       </div>
     </div>
     <div class="form-group">
       <label class="control-label col-sm-4" for="lName">Last Name</label>
       <div class="col-sm-4">
         <input type="text" name="lName" required="required"/>
       </div>
     </div>
     <div class="form-group">
       <label class="control-label col-sm-4" for="pass">Password</label>
       <div class="col-sm-4">
         <input type="password" name="pass" required="required"/>
       </div>
     </div>
     <div class="form-group">
       <label class="control-label col-sm-4" for="rePass">Re-type Password</label>
       <div class="col-sm-4">
         <input type="password" name="rePass" required="required"/>
       </div>
     </div>
     <div class="form-group">
       <div class="col-sm-4">
       </div>
       <div class="col-sm-4">
         <input type="submit" value="Submit" class="btn btn-success"/>
         <input type="reset" class="btn btn-danger"/>
       </div>
     </div>
     </form>

   </div>
 </body>

</html>
