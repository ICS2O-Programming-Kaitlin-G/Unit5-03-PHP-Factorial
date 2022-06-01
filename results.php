<?php
  //getting user input
  $userNumber = intval($_POST["user-number"]);
  //initializing counter and factorial
  $counter = 1;
  $factorial = 1;
  //the do... while loop that will calculate the factorial to the user's number
  do {
    $factorial = $factorial * $counter;
    $counter = $counter + 1;
  } while ($counter <= $userNumber);
  //echo element that will display the counter
  echo "<p>The factorial of the number you have inputted is: " . $factorial;
?>