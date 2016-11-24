<?php
require_once("conn.php");

$userID=$_SESSION["userId"];

// Get the avatar corresponding to the user id
function usedAvatar($userID, $db) {
$fetchAvatar = $db->query("SELECT avatarPic FROM users WHERE id='$userID';");
$resultFetchAvatar = $fetchAvatar->fetchColumn();
return $resultFetchAvatar;
}

//Uppdate the database with right information
function updateDatabase($db, $sql, $userID){
  try {
    $count = $db->exec($sql);
    $db = null;
  }
  catch(PDOException $e) {
    echo $e->getMessage();
  }
}

//show the avatar
echo '<a href="404.html"><img src="avatars/'.usedAvatar($userID, $db).'" id="avatar" class="img-circle img-responsive" alt="Image not available" /></a>' . "<br>";
