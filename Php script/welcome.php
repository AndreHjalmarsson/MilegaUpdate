<?php
require "conn.php";

if(isset($_SESSION["username"]))
{

  $email = $_SESSION["email"];
  $statement = $db->query("SELECT email FROM admin WHERE email = '$email';");
  $result = $statement->fetchColumn();
    if ($result) {
      require "adminWelcome.php";
    } else {
      require "userWelcome.php";
    }

}


?>
