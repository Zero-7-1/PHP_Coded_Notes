<?php

/* Conditional statements are used to perform different actions based on different 
  conditions. 
  We have following conditionls: 
  if statement - executes some code if one condition is true
  if...else statement - executes some code if a condition is true and 
                        another code if that condition is false
  if...elseif...else statement - executes different codes for more than two conditions
  switch statement - selects one of many blocks of code to be executed
*/



/*   PHP if Operators
  
  If statements contain conditions that compare two values so for this we have 
  comparison operators 
  ==	Equal	Returns true if the values are equal	
  ===	Identical	Returns true if the values and data types are identical	
  
  !=	Not equal	Returns true if the values are not equal	
  <>	Not equal	Returns true if the values are not equal	

  !==	Not identical	Returns true if the values or data types are not identical	

  >	Greater than	Returns true if the first value is greater than the second value	

  <	Less than	Returns true if the first value is less than the second value	

  >=	Greater than or equal to	Returns true if the first value is greater than, 
      or equal to, the second value	

  <=	Less than or equal to	Returns true if the first value is less than, or equal to,
      the second value

 To check more than one condition, we can use logical operators, 
 
 and - 	And	True if both conditions are true	
 &&  -  And	True if both conditions are true	

 or	-   Or	True if either condition is true	
 || - 	Or	True if either condition is true	

 xor - Xor	True if either condition is true, but not both	
  !	 - Not	True if condition is not true     
*/


// if...else statement
$age = 20;
if ($age >= 18) {
  echo 'You are old enough to vote!' . "\n";
} else {
  echo 'Sorry, you are too young to vote.' . "\n";
}


// if...elseif...else statement
$t = date('H'); // hour
if ($t < 12) {
  echo 'Have a good morning!';
} elseif ($t < 17) {
  echo 'Have a good afternoon!';
} else {
  echo 'Have a good evening!';
}




// Checking if an array is empty or not
// The isset() function will generate a warning or e-notice when the variable does 
 // not exists. The empty() function will not generate any warning or 
 // e-notice when the variable does not exists.

$posts = [];

if (!empty($posts[0])) {
  echo $posts[0];
} else {
  echo 'There are no posts';
}





/* -------- Switch Statements ------- */

$favcolor = 'red';

switch ($favcolor) {
  case 'red':
    echo 'Your favorite color is red!';
    break;
  case 'blue':
    echo 'Your favorite color is blue!';
    break;
  case 'green':
    echo 'Your favorite color is green!';
    break;
  default:
    echo 'Your favorite color is not red, blue, nor green!';
}


?>

<!-- Commonly we output variables using php echo, something like below  -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Conditionals Demo with HTML </title>
</head>
<body>

<?php    

$nameOfBook ="'The Alchemist'";
$hasRead= true;

if ($hasRead) {
  $message ="You have read $nameOfBook"; 
} else {
  $message ="You have not read $nameOfBook";
} 

?>


<h1>
    <?= $message ?> <!-- shortcut of just echoing variables --> 
     
</h1>  


</body>
</html>    