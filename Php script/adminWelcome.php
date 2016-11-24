<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Welcome Admin <?php echo $_SESSION["firstname"] ?></h2> <br><br>
    <?php
    require("avatar.php");

    ?>
    <br><br>
    <a href="/logOut.php">
      <button>Log out</button>
    </a>
  </body>
</html>
