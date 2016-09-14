<?php
require_once 'DALi.php';
$userError = $passError = "";
$userName = $password = "";
$valid = true;

if ( $_SERVER["REQUEST_METHOD"] == "POST" )
{

  if ( $_POST['submit'] == 'Login' ) {
      /*$dali = new DALi();*/

      $_SESSION["name"] = "Login";
      /* do the right stuff */
      header("Location: " . $_POST['page'] );
    }
    elseif ($_POST['submit'] == 'Register') {
      $_SESSION["name"] = "Register";
      /* do the right stuff */
      header("Location: " . $_POST['page'] );
    }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
