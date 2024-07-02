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

// Operator Percedence
/*
Operator precedence determines the order in which different operators in an expression 
are evaluated. Operators with higher precedence are evaluated before operators with 
lower precedence. When operators have the same precedence, their associativity 
determines the order of evaluation.
Left-associative: Operators are evaluated from left to right.
Right-associative: Operators are evaluated from right to left.

(Refer to this table)
Operators                                 | Description                                       | Associativity
 *   ----------------------------------------- | ------------------------------------------------- | -------------
 *   clone, new                                | Clone and new                                     | None
 *   **                                        | Exponentiation                                    | Right
 *   ++, --, ~, (int), (bool), etc.            | Increment/Decrement, Type Casting, etc.           | Right
 *   instanceof                                | Type check                                        | None
 *   !                                         | Logical NOT                                       | Right
 *   *, /, %                                   | Multiplication, Division, Modulus                 | Left
 *   +, -, .                                   | Addition, Subtraction, Concatenation              | Left
 *   <<, >>                                    | Bitwise Shift                                     | Left
 *   <, <=, >, >=                              | Comparison                                        | None
 *   ==, !=, ===, !==, <=>                     | Equality/Inequality/Spaceship                     | None
 *   &                                         | Bitwise AND                                       | Left
 *   ^                                         | Bitwise XOR                                       | Left
 *   |                                         | Bitwise OR                                        | Left
 *   &&                                        | Logical AND                                       | Left
 *   ||                                        | Logical OR                                        | Left
 *   ??                                        | Null coalescing                                   | Left
 *   ? :                                       | Ternary                                           | Right
 *   =                                         | Assignment                                        | Right
 *   +=, -=, *=, /=, .=, %=, etc.              | Combined Assignment                               | Right
 *   and                                       | Logical AND                                       | Left
 *   xor                                       | Logical XOR                                       | Left
 *   or                                        | Logical OR                                        | Left

 We could study about bitwise operators some time later in our revison journey 
*/




/* Control flow refers to the order in which statements are exceuted. 
These statements allows us to make decisions, repeat actions, and control
the flow of excecution of in our code. These are fundamentals to any 
programming language. 

Now again we can say there are two types of control flow satements or 
we can achieve control flow in two ways

1. Conditional Statements (if, if..else, if..else if..else, switch)- 
   As the name suggests these statements performs actions based on certain conditions.

2. Looping Statements(for, while, do while, foreach)- These provides a way for 
iteration that is repeating something until a condtion is met. 
*/

/*
  PHP if Operators use both Comparison and Logical Operators 
  If statements contain conditions that compare two values so for this we have 
  comparison operators 
  To check more than one condition, we can use logical operators
*/


// if...else statement
$age = 20;
if ($age >= 18) {
  echo 'You are old enough to vote!' . "\n";
} else {
  echo 'Sorry, you are too young to vote.' . "\n";
}; 

echo "<br>";
echo "<br>";

// if...elseif...else statement
$t = date('H'); // using date object we could get hour
if ($t < 12) {
  echo 'Have a good morning!';
} elseif ($t < 17) {
  echo 'Have a good afternoon!';
} else {
  echo 'Have a good evening!';
}

echo "<br>";
echo "<br>";


// Checking if an array is empty or not
/*
We have used here empty() which returns true if the variable is 
considered empty, and false otherwise. The ! (logical NOT) operator negates this 
result.
*/

$posts = [];

if (!empty($posts[0])) {
  echo $posts[0];
} else {
  echo 'There are no posts';
}

echo "<br>";
echo "<br>";

// Shorthand if Statements or Ternary Operators or Conditional Expressions
// if in one line
$a = 5;
if ($a < 10) $b = "a is inded smaller";
echo $b;

// if..else in one line
$ab = 13;
$ba = $ab < 10 ? "this side runs if true" : " but ab is greater";
echo $ba;

echo "<br>";
echo "<br>";



// Switch Statements are better alternatives to complex nested if..else statements 

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

/*Now see, these concepts are similar to all programming languages so 
  obviously we need break to stop exceuting when case is matched and we 
  use default to the run code if all cases fails */

?>





<!DOCTYPE html>
<html lang="en">
<head>
  <title> OpsControlLoops </title>
</head>
<body>

<!--  note that we can use php in between htmls to write some logic -->
<?php    
$nameOfBook ="'The Alchemist'";
$hasRead= true; // we have read this boom 

if ($hasRead) {
  $message ="You have read $nameOfBook"; 
} else {
  $message ="You have not read $nameOfBook";
} 
?>

<h1>
    <?= $message ?> <!-- a shortcut of just echoing variables -->  
</h1>  
</body>
</html>    

<?php
// Now we would look over looping 

// while loop - repeats code as long as condition is true 
/* Lets consider this example 
Using a while loop, we can ensure that each comment is processed and displayed, 
even if the number of comments is unknown 
*/

$comments = [
  "This is the first comment!",
  "Here is another comment.",
  "Yet another insightful comment.",
  "This is the last comment."
];    // generally we would fetch this from database, we would cover this in db part

$index = 0; // Initialize a counter

$totalComments = count($comments); // count() can give total number of comments 

// Using while loop to display each comment
while ($index < $totalComments) {
  echo "Comment: " . $comments[$index] . "<br>";
  $index++; // Do not forget to Increment the counter other it will run forever 
}
// If there are no comments
if ($totalComments === 0) {
  echo "There are no comments.";
}


/*
do..while works bit different it will always execute the block of code at least once, 
it will then check the condition, and repeat the loop while the specified condition is
true lets take same example and use do while 
*/


echo "<br>";
echo "<br>";



// Array of comments
$comments2 = [

];

// Initialize a counter
$index2 = 0;

// Get the total number of comments
$totalComments2 = count($comments2);

// Use a do-while loop to display each comment
do {
  if ($totalComments2 === 0) {
      echo "There are no comments.";
      break; // Exit the loop if there are no comments
  }
  
  echo "Comment: " . $comments2[$index2] . "<br>";
  $index2++; // always rememeber to include increment inside do block at last 
} 
while ($index2 < $totalComments2);




// for loop 



?>