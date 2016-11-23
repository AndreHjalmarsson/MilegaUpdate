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
<<<<<<< Updated upstream
echo '<img src="avatars/'.usedAvatar($userID, $db).'" id="avatar" height="100" width="100" alt="Image not available" />' . "<br>";
=======
echo '<a href="#" data-toggle="modal" data-target=".login-modal-lg" "><img class="img-circle img-responsive" src="avatars/'.usedAvatar($userID, $db).'" id="avatar" alt="Image not available" /></a>' . "<br>";

if (empty($_GET['ChangeAvatar'])) {
echo '<a class = "btn position" href="welcome.php?ChangeAvatar=pic">Byt profilbild</a>';
}

//Choose new avatar
if (!empty($_GET['ChangeAvatar'])) {
    echo '<form action="" id="addAvatar" method="post" enctype="multipart/form-data">';
    echo '  <input type="file" name="file[]" multiple accept="/*"><br>';
    echo '  <input type="submit" value="Ladda upp bild">';
    echo '</form>';
}


//Changes to the new avatar
if (($_SERVER["REQUEST_METHOD"] === "POST") &&  (!empty($_GET['ChangeAvatar']))){
    $prefix = "image";
    $imageData = $_FILES["file"];

    foreach ($imageData["name"] as $i => $imageName) {
      $temp = $imageData["tmp_name"][$i];
      if (exif_imagetype($temp) === 2) {
        $ext = strrchr($imageName, ".");
        $newName = $prefix . (rand(1,5000)) . $ext;
        move_uploaded_file($temp, "avatars/$newName");
      $sql = "UPDATE users SET avatarPic='$newName' WHERE id=$userID;";
      updateDatabase($db, $sql, $userID);
      echo "Uppladdad" . "<br>";
       echo '<a href="welcome.php">Verkställ ändringar</a>';
        } else {
        print "Bilden måste vara av .jpg eller .png.";
      }
    }
}
>>>>>>> Stashed changes
