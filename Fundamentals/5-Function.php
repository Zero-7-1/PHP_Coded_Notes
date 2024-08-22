<?php
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

Also we have Default Argument Value - If we call the function without arguments it 
takes the default parameter value as argument. 
Additionally, functions can either return a value or perform an action without 
returning a value. With return functions compute and return a value. 
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


// Anonymous functions or closures
/*
Functions which have no specified name. They are most useful as the value of 
callable parameters. 

I will come to this after closure class and callbacks
*/


// Arrow Functions



?>