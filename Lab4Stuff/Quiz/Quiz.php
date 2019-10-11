<?php
//access the global array called $_POST to get the values from the text fields
$Q1= $_POST["Q1"];
$Q2= $_POST["Q2"];
$Q3= $_POST["Q3"];
$Q4= $_POST["Q4"];
$Q5= $_POST["Q5"];
$correct = 0;
if (!empty($_POST)) {
  // code...
  echo "Question 1: The length of time where you cannot act after blocking an attack is ___ <br>";
  echo "You answered: " . $Q1 . "<br>";
  echo "Correct answer: Blockstun <br><br>";
  if ($Q1 == "Blockstun")
  {
    // code...
    $correct++;
  }
  echo "Question 2: The length of time where you cannot act after not blocking an attack is ___ <br>";
  echo "You answered: " . $Q2 . "<br>";
  echo "Correct answer: Hitstun <br><br>";
  if ($Q2 == "Hitstun")
  {
    // code...
    $correct++;
  }
  echo "Question 3: The standard unit of time for fighitng games <br>";
  echo "You answered: " . $Q3 . "<br>";
  echo "Correct answer: Blockstun <br><br>";
  if ($Q3 == "Frames")
  {
    // code...
    $correct++;
  }
  echo "Question 4: The length of time where you cannot act after not blocking an attack is ___ <br>";
  echo "You answered: " . $Q4 . "<br>";
  echo "Correct answer: Canceling <br><br>";
  if ($Q4 == "Canceling")
  {
    // code...
    $correct++;
  }
  echo "Question 5: ULTRA ______ <br>";
  echo "You answered: " . $Q5 . "<br>";
  echo "Correct answer: CCCCCOMMMMBOOOO <br><br>";
  if ($Q5 == "CCCCCOMMMMBOOOO")
  {
    // code...
    $correct++;
  }

  echo "Num Correct: " . $correct * 100 / 5 . "%";
}
else {
  echo "Please answer at least one question: <br>";
}


?>
