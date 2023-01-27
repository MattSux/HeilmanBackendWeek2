<?php
  // clean input parameters
  $firstname = filter_input(INPUT_GET, 'firstname', FILTER_SANITIZE_STRING);
  $lastname = filter_input(INPUT_GET, 'lastname', FILTER_SANITIZE_STRING);
  $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);
  
  // check if all required parameters are submitted
  if (!$firstname || !$lastname || !$age) {
    echo "Please submit all required parameters: firstname, lastname, and age.";
    exit;
  }
  
  // output first sentence
  echo "Hello, my name is $firstname $lastname.";
  
  // output second sentence
  if ($age >= 18) {
    echo "I am $age years old and I am old enough to vote in the United States.";
  } else {
    echo "I am $age years old and I am not old enough to vote in the United States.";
  }
  
  // calculate days based on age
  $days = $age * 365;
  echo "I have been alive for approximately $days days.";
  
  // output current date
  echo "Today's date is " . date('Y-m-d');
?>