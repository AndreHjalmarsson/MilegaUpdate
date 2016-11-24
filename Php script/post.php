<?php
// require("conn.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (!isset($_POST["action"])) {
    echo "Type something";
  }

  $action = $_POST["action"];
  if ($action === "createPost") {
    require("conn.php");
    // session_start();
    $uid = $_SESSION["userId"];
    $content = $_POST["content"];
    $date = date("Y-m-d H:i:s");
    $insertPostSQL = <<<EOT
INSERT INTO posts (uid, content, published)
VALUES (:uid, :content, :published)
EOT;
  $insertPostStatement = $db->prepare($insertPostSQL);
  $insertPostStatement->execute([
    ':uid' => $uid,
    ':content' => $content,
    ':published' => $date,
      ]);
  }
}

?>
