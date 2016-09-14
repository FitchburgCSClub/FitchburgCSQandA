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


      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php">
          <span class="glyphicon glyphicon-log-in"></span>Log-in</a></li>
      </ul>
    </div>
  </nav>
