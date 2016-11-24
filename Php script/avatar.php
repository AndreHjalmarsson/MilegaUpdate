<?php
$userID = $_SESSION["userId"];

// Get avatar pic from userId
function usedAvatar($userID, $db) {
$fetchAvatar = $db->query("SELECT avatarPic FROM users WHERE id='$userID';");
$resultFetchAvatar = $fetchAvatar->fetchColumn();
return $resultFetchAvatar;
}

//Uppdate mysql
function updateDatabase($db, $sql, $userID){
  try {
    $count = $db->exec($sql);
    $db = null;
  }
  catch(PDOException $e) {
    echo $e->getMessage();
  }
}

//show avatar
echo '<img src="avatars/'.usedAvatar($userID, $db).'" id="avatar" height="100" width="100" alt="Image not available" />' . "<br>";

if (empty($_GET['ChangeAvatar'])) {
echo '<a href="welcome.php?ChangeAvatar=pic">Byt profilbild</a>';
}
// } else {
//   echo '<a href="welcome.php">Verkställ ändringar</a>';
// }

//Uppload new avatar form
if (!empty($_GET['ChangeAvatar'])) {
    echo '<form action="" id="addAvatar" method="post" enctype="multipart/form-data">';
    echo '  <input type="file" name="file[]" multiple accept="/*"><br>';
    echo '  <input type="submit" value="Ladda upp bild">';
    echo '</form>';
}


//Process and upload new avatar
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
