<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h2>Register</h2>
    <form action="register.php"method="POST">
      <span>Username:</span> <input type="username" name="regUsername" placeholder="Your name" value=""><br><br>
      <span>Password:</span> <input type="password" name="regPassword" placeholder="Your password" value=""><br><br>
      <span>First name:</span> <input type="text" name="firstName" placeholder="Your firstname" value=""><br><br>
      <span>Last name:</span> <input type="text" name="lastName" placeholder="Your lastname" value=""><br><br>
      <span>Email:</span> <input type="text" name="email" placeholder="Your email" value=""><br><br>
      <br><br>
      <input type="submit" value="Sign Up"><br><br>
    </form>


  </body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require("conn.php");
  if ($_POST["regUsername"] === "" || $_POST["regPassword"] === "" || $_POST["firstName"] === "" || $_POST["lastName"] === "" || $_POST["email"] === "") {
    echo "Enter all";
  } else {

  $regUsername = $_POST["regUsername"];
  $regPassword = $_POST["regPassword"];
  $regFirstName = $_POST["firstName"];
  $regLastName = $_POST["lastName"];
  $regEmail = $_POST["email"];
  $regPassword = password_hash($regPassword, PASSWORD_BCRYPT);

  $sql = "INSERT INTO users (username, userpassword, firstname, lastname, email) VALUES ('$regUsername', '$regPassword', '$regFirstName', '$regLastName', '$regEmail')";
  $db->exec($sql);
  header("location: /");
  }
}

?>
