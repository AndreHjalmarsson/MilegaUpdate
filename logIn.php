<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require("conn.php");
  $statement = $db->query("SELECT * FROM users;");
  $result = $statement->fetchAll();

  $_SESSION["username"] = $_POST["username"];
  $_SESSION["password"] = $_POST["password"];

  if ($_SESSION["username"] !== "" && $_SESSION["password"] !== "") {

    foreach($result as $row) {
      if ($_SESSION["username"] === $row["username"] && password_verify($_SESSION["password"], $row["userpassword"])) {
        $_SESSION["email"] = $row["email"];
        $_SESSION["firstname"] = $row["firstname"];
        $_SESSION["lastname"] = $row["lastname"];
        $_SESSION["userId"] = $row["id"];
        if (isset($_POST["remember"])) {

          $uid = $row["id"];
          $first = random_bytes(64);
          $second = random_bytes(128);
          $cookie = "$first|$uid|$second";
          $timestamp = time() + 60 * 60  * 24 * 30;
          $expire = date("Y-m-d H:i:s", $timestamp);

          $insertCookieSQL = <<<EOT
      INSERT INTO tokens (userid, first, second, expire)
      VALUES (:userid, :first, :second, :expire)
EOT;
        $insertCookieStatement = $db->prepare($insertCookieSQL);
        $insertCookieStatement->execute([
          ':userid' => $uid,
          ':first' => $first,
          ':second' => $second,
          ':expire' => $expire,
            ]);
          setcookie("Milega", $cookie, $timestamp, "", "", false, true);
        }
      header("location: welcome.php");
    }
    }
  }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h2>Log in</h2>
    <form action="logIn.php" method="POST">
      <span>Username:</span> <input type="username" name="username" placeholder="Your name..." value="">
      <span>Password:</span> <input type="password" name="password" placeholder="Your password..." value="">
      <input type="checkbox" name="remember" id="rememberCheckbox">
      <label for="rememberCheckbox">Remember me</label>
      <br><br>
      <input type="submit" value="Log in"><br><br>
    </form>


  </body>
</html>
