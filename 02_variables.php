<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/









/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Sudhanshu'; // String, Can be single or double quotes
$age = 25; // Integer
$hasBrain = true; // Boolean
$gradeAvg = 8.11; //Float

var_dump($hasBrain);  // shows details 


// Double quotes can be used to add variables to strings
echo "$name is $age years old";
// We can even use . like +  but double quotes method is easier  


// Arithmetic Operators

echo 5 + 5;
echo 10 - 6;
echo 5 * 10;
echo 10 / 2;




// Constants - Cannot be changed, like db credentials 
define('HOST', 'localhost');
define('DB_name', 'dev_db');

echo(HOST);
