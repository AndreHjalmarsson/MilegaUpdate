<?php
require("conn.php");
?>
<a href="course.php">Tillbaka</a>

<form action="writepost.php" method="POST">
  <input type="hidden" name="action" value="createPost">
  <textarea name="content" placeholder="What's going on? :)"></textarea>
  <button type="submit">Share</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (!isset($_POST["action"])) {
    echo "Type something";
  }
  $action = $_POST["action"];
  if ($action === "createPost") {
    // require("conn.php");
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
$uid = $_SESSION["userId"];
$getPosts = $db->query("SELECT * FROM posts WHERE uid = '$uid' ORDER BY published DESC;");
$getPostsResult = $getPosts->fetchAll();

foreach ($getPostsResult as $row) {
  echo $row["content"] . '<br>' . $row["published"] . '<br><br>';
}





?>
