<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="register.php"method="POST">
      <input type="text" name="regUsername" placeholder="Anv&auml;darnamn" value=""><br>
      <input type="password" name="regPassword" placeholder="L&ouml;senord" value=""><br>
      <input type="text" name="firstName" placeholder="F&ouml;rnamn" value=""><br>
      <input type="text" name="lastName" placeholder="Efternamn" value=""><br>
      <input type="text" name="email" placeholder="E-mail" value=""><br>
      <input class="btn"  type="submit" value="Registrera"><br>
    </form>


  </body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if ($_POST["regUsername"]) {
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
}

?>
