<!DOCTYPE html>
<html lang="en-us">
<?php
  $title = "Log-in";
  include 'header.php';?>
  <div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ;?>" method="post"
           role="form" class="form-horizontal">
      <div class="form-group">
        <label class="control-label col-sm-2" for="user">User Name:</label>
        <div class="col-sm-8">
          <input type="text" name="user" id="user" class="form-control"/>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pass">Password:</label>
        <div class="col-sm-8">
          <input type="password" name="pass" id="pass" class="form-control"/>
        </div>
      </div>
      <div class="form-group">
        <input type="submit" value="Submit" class="btn btn-success"/>
      </div>
    </form>
  </div>
  <?php include 'footer.php'; ?>
</html>
