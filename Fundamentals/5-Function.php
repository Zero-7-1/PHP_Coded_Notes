<?php

/*
PHP has more than 1000 built-in functions, and in addition we can create our own 
custom functions called user defined.
*/

// User Defined Function 

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
function can't be used outside and the a global variable can't be used inside a function 
without global keyword (refer 2-VarDataTypConst.php) 

All functions, also classes in PHP have the global scope - they can be called 
outside a function even if they were defined inside another function and vice versa.

PHP does not support function overloading (which is a thing in Java), nor is it possible 
to undefine or redefine previously-declared functions.
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


// Anonymous functions or also known as closures
/*
Functions which have no specified name. They are most useful as the value of 
callable parameters. Generally anonymous functions are implemented using the 
Closure class. (More about closures and Callable parameters later..)
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