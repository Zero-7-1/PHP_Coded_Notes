<?php
// Q. DEFINE EXPRESSIONS AND HOW IT DIFFERS FROM STATEMENT ? 
// "Anything that has a value is an Expression" 
/* 
The most basic forms of expressions are constants and variables. 
Slightly more complex examples for expressions are functions.
Whereas 
Statements performs an action and ends with a semicolon or enclosed within 
curly braces 
*/

/* Operator are used to perform operation.
   Operator are mainly divided by three groups.
   1.Uniary Operators that takes one values    (logical not, increment, decrement )
   2.Binary Operators that takes two values    (airthmetical)
   3.ternary operators that takes three values (terniary)
*/

// Arithmetic Operators
/* 
  +$a  Identity Conversion of $a to int or float as appropriate
  -$a	Negation	Opposite of $a
  $a + $b	Addition	Sum of $a and $b
  $a - $b	Subtraction	Difference of $a and $b
  $a * $b	Multiplication	Product of $a and $b
  $a / $b	Division	Quotient of $a and $b
  $a % $b	Modulo	Remainder of $a divided by $b
  $a ** $b	Exponentiation	Result of raising $a to the $b'th power 
  
*/

// Increment/decrement Operators
/*   
++$a	Pre-increment	- Increments $a by one, then returns $a
$a++	Post-increment - Returns $a, then increments $a by one

--$a	Pre-decrement	Decrements $a by one, then returns $a
$a--	Post-decrement	Returns $a, then decrements $a by one
*/

//Assignment	Operators 
/*
x = y	The left operand gets set to the value of the expression on the right	

x += y is same as x = x + y	
x -= y is same as	x = x - y	
x *= y is same as x = x * y		
x /= y is same as	x = x / y	
x %= y is same as	x = x % y	
*/

// Comparison Operators - comparison operators are used to compare two values
/*
==	Equal	e.g $x == $y	Returns true if $x is equal to $y	
===	Identical	e.g $x === $y	Returns true if $x is equal to $y, 
                            and they are of the same type	

!=	Not equal	e.g $x != $y	Returns true if $x is not equal to $y	
<>	Not equal e.g	$x <> $y	Returns true if $x is not equal to $y	
!==	Not identical	e.g $x !== $y	Returns true if $x is not equal to $y, 
                                or they are not of the same type	

>	Greater than	
<	Less than	
>=	Greater than or equal to	
<=	Less than or equal to

<=>	Spaceship	e.g $x <=> $y	Returns an integer less than, equal to, or 
                            greater than zero, depending on if $x is less than, 
                            equal to, or greater than $y. Introduced in PHP 7.	
*/

// Logical Operators - logical operators are used to combine conditional statements
/* 
and	- And	$x and $y	True if both $x and $y are true	
or	- Or	$x or $y	True if either $x or $y is true	
xor	- Xor	$x xor $y	True if either $x or $y is true, but not both	
&&	- And	$x && $y	True if both $x and $y are true	
||	- Or	$x || $y	True if either $x or $y is true	
!	  - Not	!$x	True if $x is not true
*/

// PHP String Operators - specially designed for strings.
/*
.	Concatenation	- $txt1 . $txt2	Concatenation of $txt1 and $txt2	
.=	Concatenation assignment - 	$txt1 .= $txt2	Appends $txt2 to $txt1
*/

// Conditional Assignment Operators
/*
?: - 	Ternary	e.g $x = expr1 ? expr2 : expr3	Returns the value of $x
                                       The value of $x is expr2 if expr1 = TRUE
                                       The value of $x is expr3 if expr1 = FALSE	
                              
??	- Null coalescing	e.g $x = expr1 ?? expr2	Returns the value of $x.
                         The value of $x is expr1 if expr1 exists, and is not NULL 
                         If expr1 does not exist, or is NULL, the value of $x is expr2
                         Introduced in PHP 7
*/














/* Control flow refers to the order in which statements are exceuted. 
These statements allows us to make decisions, repeat actions, and control
the flow of excecution of in our code. These are fundamentals to any 
programming language. 

Now again we can say there are two types of control flow satements or 
we can achieve control flow in two ways

1. Conditional Statements (if, else if, switch)- As the name suggests these
statements performs actions based on certain conditions.

2. Looping Statements(for, while, do while, for...in, for...of)- These 
provides a way for iteration that is repeating something until a condtion is 
met. */












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