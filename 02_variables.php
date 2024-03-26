<?php


/*
 PHP Data Types
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource

PHP has no command for declaring a variable. 
It is created the moment we first assign a value to it.
*/

/*
     Variable Rules 
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Sudhanshu'; // String, Can be in single or double quotes
$age = 25; // Integer
$hasBrain = true; // Boolean
$gradeAvg = 8.11; //Float

var_dump($hasBrain);  // get the data type of a variable, use the var_dump() function.

// Double quotes can be used to add variables to strings
echo "$name is $age years old \n";
// We can even use . like +  but double quotes method is easier  


// Arithmetic Operators

echo 5 + 5 . "\n";
echo 10 - 6 . "\n";
echo 5 * 10 . "\n";
echo 10 / 2 . "\n";

/* PHP is a Loosely Typed Language::
PHP automatically associates a data type to the variable, depending on its value. 
Since the data types are not set in a strict sense, we can do things like adding 
a string to an integer without causing an error. */
echo "5" + 5 . "\n";  // this will output 10
/* In PHP 7, type declarations were added. This gives an option to specify 
the data type expected when declaring a function, and by enabling 
the strict requirement, it will throw a "Fatal Error" on a type mismatch. 
*/


// Constants - Cannot be changed, like db credentials 
define('HOST', 'localhost');
define('DB_name', 'dev_db');
echo(HOST);
