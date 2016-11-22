<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    // function showQuestions($db) {
    $showQuestionsSQL = <<<EOT
    SELECT question, id FROM questions
    WHERE subcourse_id = 1
EOT;

    $showQuestionsStatement = $db->query($showQuestionsSQL);
    $showQuestionsResult = $showQuestionsStatement->fetchAll();
    // return $showQuestionsResult;
  // }
  //
  // $_SESSION["questions"] = showQuestions();
  // echo $_SESSION["questions"][1];

    foreach($showQuestionsResult as $row) {
      $userID = $_SESSION["userId"];
      $questionID = $row["id"];

        echo '<h3>' .$row["question"] . '</h3>' . "<br>";
        echo '<form action="questionPages/page_1.php" method="post">';
        echo '<textarea name="'.$questionID.'" rows="5" cols="40" placeholder="Enter an answer" value=""></textarea>' . "<br>";
        echo '<input type="submit"  name="submit" value="Submit">' . "<br><br><br>";

      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $answer = $_POST[$questionID];

        if ($answer) {
        $insertAnswersSQL = <<<EOT
    INSERT INTO answers (id_user, id_question, answer, completed)
    VALUES (:id_user, :id_question, :answer, :completed)
EOT;
      $insertAnswersStatement = $db->prepare($insertAnswersSQL);
      $insertAnswersStatement->execute([
        ':id_user' => $userID,
        ':id_question' => $questionID,
        ':answer' => $answer,
        ':completed' => 1,
          ]);
        }
      }
    }
    ?>
  </body>
</html>
