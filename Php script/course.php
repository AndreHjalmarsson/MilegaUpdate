<?php
require("conn.php");
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="welcome.php">Start</a><br>
    <a href="writePost.php">Chat</a>
    <br><br>
  <?php

    $statement = $db->query("SELECT * FROM subcourses");
    $result = $statement->fetchAll();
    $id_user = $_SESSION["userId"];
    $i = 1;
    foreach($result as $row) {

      $nrOfQuestions = $db->query("SELECT count(questions.id) FROM questions WHERE subcourse_id = $i");
      $resultNrOfQuestions = $nrOfQuestions->fetchColumn();

      $nrOfAnswers = $db->query("SELECT count(answers.answer) FROM answers INNER JOIN questions ON answers.id_question = questions.id WHERE subcourse_id = $i AND id_user = $id_user;");
      $resultNrOfAnswers = $nrOfAnswers->fetchColumn();

      echo '<a href="questPages/page_' . $row["id"] . '.php">' . $row["name"] .'</a>' . ' Answered questions: ' . "($resultNrOfAnswers/$resultNrOfQuestions)<br>";
      $i++;
    }


   ?>
  </body>
</html>
