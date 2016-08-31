<?php
session_start();
if ( empty($_SESSION["exists"] ) )
{
  $_SESSION["name"] = "Guest";
  $_SESSION["exists"] = true;
}
$websiteName = "Fitchburg State CS Q and A";
?>
  <head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navebar-header">
        <a class="navbar-brand" href="index.php"><?php echo $websiteName; ?></a>
      </div>

      <!-- for debug -->
      <ul class="nav navbar-nav">
        <li><?php echo $_SESSION["name"]; ?></li>
      </ul>
      <!-- END FOR DEBUG -->

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" title="Sign Up" data-toggle="popover" data-placement="bottom"
               data-content=
               "<form method='post' role='form' class='form-horizontal'
                  action='user.php'>
                   <div class='form-group'>
                     <label class='control-label' for='usedrName'>User Name:</label>
                     <div>
                       <input type='text' name='userName' id='userName' class='form-control'/>
                     </div>
                   </div>
                   <div class='form-group'>
                     <label class='control-label' for='password'>Password:</label>
                     <div>
                       <input type='passnword' name='password' id='password' class='form-control'/>
                     </div>
                   </div>
                   <div class='form-group'>
                       <input type='text' name='page' id='page' hidden='hidden' value='<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>'/>
                   </div>
                   <div class='form-group'>
                     <input type='submit' name='submit' id='submit' value='Register' class='btn btn-success'/>
                   </div>
               </form>
               ">
               <span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
        <li><a href="#" title="Login" data-toggle="popover" data-placement="bottom"
          data-content=
          "<form method='post' role='form' class='form-horizontal'
            action='user.php'>
              <div class='form-group'>
                <label class='control-label' for='usedrName'>User Name:</label>
                <div>
                  <input type='text' name='userName' id='userName' class='form-control'/>
                </div>
              </div>
              <div class='form-group'>
                <label class='control-label' for='password'>Password:</label>
                <div>
                  <input type='password' name='password' id='password' class='form-control'/>
                </div>
              </div>
              <div class='form-group'>
                  <input type='text' name='page' id='page' hidden='hidden' value='<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>'/>
              </div>

              <div class='form-group'>
                <input type='submit' name='submit' id='submit' value='Login' class='btn btn-success'/>
              </div>
          </form>
            ">
            <span class="glyphicon glyphicon-log-in"></span>Login</a></li>
      </ul>
    </div>
  </nav>
  <script>
    $(document).ready(function(){
      $('[data-toggle="popover"]').popover({
        html: true,
        container: 'nav'
      });
    });
  </script>
