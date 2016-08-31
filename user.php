<?php
$userError = $passError = "";
$userName = $password = "";
$valid = true;

if ( $_SERVER["REQUEST_METHOD"] == "POST" )
{

  if ( $_POST['submit'] == 'Login' ) {
      $_SESSION["name"] = "login";
      /* do the right stuff */
      header("Location: " + $_POST['page'] );
    }
    elseif ($_POST['submit'] == 'Register') {
      echo "register";
    }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
