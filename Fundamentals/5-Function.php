<?php

/*===============================================================================
User Defined Function, Parameters & Arguments, Default Parameter/Argument, 
Return statement                    
================================================================================*/

/*
A user-defined function declaration starts with the keyword function, 
followed by the name of the function. 

Information can be passed to functions through arguments and parameters. 
Parameters are the variables that are defined in the function signature 
(or declaration). They act as placeholders for the values that
will be passed to the function when it is called. 

Arguments are the actual values that are passed to the function when it is called. 
They are the real data that the function processes. 

(Sometimes people f$$k up Parameters as Aguments, I am not sure which is absolute 
correct either but I get the concept)

Q. WHAT IS DEFAULT ARGUMENT ? 
Also we have Default Argument Value - If we call the function without arguments it 
takes the default parameter value as argument. 
Additionally, functions can either return a value or perform an action without 
returning a value. With return functions compute and return a value. 

Functions have their own scope and are global but for variable declared inside the 
function can't be used outside and a global variable can't be used inside a 
function without global keyword

All functions, also classes in PHP have the global scope - they can be called 
outside a function even if they were defined inside another function and 
vice versa.

PHP does not support function overloading (which is a thing in Java), nor is 
it possible to undefine or redefine previously-declared functions.
*/

function studentData($name, $class) {
    echo $name . " of " . $class;
}
studentData("John Doe", "Class 10");

echo "<br>";
echo "<br>";

function setHeight($minheight = 50) {
    echo "The height is : $minheight";
  }
 setHeight(350);
 echo "<br>";
 setHeight(); // will use the default value of 50

 echo "<br>";
 echo "<br>";

 function sumTwo($a, $b) {
    return $a + $b;
 }
echo sumTwo(5,5);


echo "<br>";
echo "<br>";





/*===============================================================================
Variable Functions, Function Callbacks, Function Tables, Anonymous function,
Arrow Function   
================================================================================*/

/*
If a variable name has parentheses appended to it, PHP will look for a 
function with the same name as whatever the variable evaluates to, and 
will attempt to execute it. This is useful in scenarios where the function 
to be executed isn't determined until runtime, like to implement 
callbacks, 
function tables. 

Note: Variable functions won't work with language constructs such as echo, print, 
unset(), isset(), empty(), include, require etc. Utilize wrapper 
functions to make use of any of these constructs as variable functions.
*/

function sayHello() {
    echo "Hello, World!";
}

// Assign the function name to a variable as a string 
$functionName = "sayHello";

$functionName();  // This will output: Hello, World!

echo "<br>";
echo "<br>";

// Function Callbacks
/*
A callback function is a function that is passed as an argument to another 
function. This means we provide the name of a function to another function, 
which then calls it (or "callbacks" to it) at a later point when an event 
occurs or condition is met. 

More simpler example- 
Think of a callback like a “recipe” we hand to a cook. We’re saying, 
“Here’s what I want you to do with the ingredients,” but we’re not the one 
doing the cooking. The cook (the main function) uses your recipe 
(the callback function) to do the actual work.
Why Use Callbacks?
Callbacks are useful when:
we want to decide what function to execute dynamically.
we want to allow a function to take another function as a parameter and 
then execute it.

*/


// This is the main function which accepts a callback function 
function greet($message) {
    echo "Greeting: ";
    
    // Here we call the callback function
    $message();
}

// This is callback function which is needed to be passed to greet()
function sayHello2() {
    echo "You Are Doing Good, Keep Going, Success Awaits You..";
}

// Pass 'sayHello2' function as a callback to 'greet'
greet('sayHello2');  // Output: Greeting: Hello, World!


echo "<br>";
echo "<br>";

// Another Example with Parameters

// Define a function that takes a callback with parameters
function processNumbers($a, $b, $callback) {
    // Call the callback function with parameters
    $result = $callback($a, $b);
    echo "The result is: $result";
}

// Define a callback function that adds two numbers
function add($num1, $num2) {
    return $num1 + $num2;
}

// Use 'add' as a callback for 'processNumbers'
processNumbers(5, 10, 'add');  // Output: The result is: 15


echo "<br>";
echo "<br>";



// Function Tables
/*
Function tables use arrays to store references to multiple functions, 
which can be called dynamically.

*/

// Define multiple functions

function add2($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    return $b == 0 ? 'Cannot divide by zero' : $a / $b;
}

// Create a function table (array of function names)
$functionTable = [
    'add2' => 'add2',
    'subtract' => 'subtract',
    'multiply' => 'multiply',
    'divide' => 'divide'
];

// Use the function table to dynamically call functions
echo $functionTable['add2'](10, 5);        // Output: 15
echo "<br>";
echo $functionTable['subtract'](10, 5);   // Output: 5
echo "<br>";
echo $functionTable['multiply'](10, 5);   // Output: 50
echo "<br>";
echo $functionTable['divide'](10, 5);     // Output: 2

echo "<br>";
echo "<br>";

/*
Wrapper Functions: If we need to use any of the language constructs dynamically, 
we should create a regular PHP function that performs the task and then call it 
dynamically.
Example of Wrapper Function for echo-
*/
// Wrapper function for echo
function myEcho($string) {
    echo $string;
}

$functionName = 'myEcho';
$functionName('Wrap Echo!');  // Output: Hello, World!


echo "<br>";
echo "<br>";

// Anonymous functions or also known as closures
/*
Anonymous functions, also known as closures, are functions that are 
defined without a specified name. They are often used as the values of 
callable parameters, which are function arguments that expect functions 
to be passed to them. 
*/

$subtract = function($num1, $num2) {
    return $num1 - $num2;
};

echo $subtract(100,90); // we indeed need to pass () to variable


echo "<br>";
echo "<br>";


// If we have a single line or simpler function like anynomous then we could go for 
// Arrow functions 
$multiply = fn($num1, $num2) => $num1 * $num2;
echo $multiply(10, 10);



?>