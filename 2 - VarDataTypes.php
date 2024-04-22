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
  PHP Variable Rule 
- Variables must be prefixed with $
*/

$name = 'Sudhanshu'; // String, Can be in single or double quotes
$age = 25; // Integer
$hasBrain = true; // Boolean
$gradeAvg = 8.11; //Float

var_dump($hasBrain);  // get the data type of a variable, use the var_dump() function.

// Double quotes can be used to add variables to strings
echo "$name is $age years old \n";
// We can even use . like +  but double quotes method is easier  



// more about Strings .. 

// strlen() function returns the length of a string
echo strlen("Sudhanshu") . "\n";   // outputs 9

// str_word_count() function counts the number of words in a string
echo str_word_count("Hello world!") . "\n";  // outputs 2 

// strpos() function searches for a specific text within a string
echo strpos("Hello world!", "world") . "\n" ;
/* returns the character position of the first match that is 6
      If no match is found, it will return FALSE. 
       */
   //  refer complete string reference on w3schools 

// built-in functions that we can use to modify strings
/*
strtoupper() function returns the string in upper case
strtolower() function returns the string in lower case
str_replace() function replaces some characters with some other characters
strrev() function reverses a string
trim() removes any whitespace from the beginning or the end
explode() function splits a string into an array
returns a range of characters by using the substr() function
*/


// replacing characters in a string 
$greet = 'Hello World';
echo str_replace('World', 'PHP', $greet) . "\n";

echo substr($greet, 0, 5) . "\n"; // Specify the start index and end index 
// Use negative indexes to start the slice from the end of the string
  // The last character has index -1
 










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



// PHP Variables Scope 
/* The scope of a variable is the part of the script where the variable can be 
referenced or used. 
PHP has two different variable scopes:
local -  declared within a function has a LOCAL SCOPE and 
         can only be accessed within that function
    
global - declared outside a function has a GLOBAL SCOPE and 
        can only be accessed outside a function and not inside a function 
*/



// global, we already outputed global scoped varibles, those can't be acessed inside 
     // a function , we will see about function in function file 

// global keyword is used to access a global variable from within a function

     function testFunction() {
      $x = 5; // local scope
      global $name; // using global keyword 
      echo "<h3> Variable inside function is: $x </h3>";
     //  echo "<h3>Variable inside function is: $name</h3>"; UNDEFINED 
     echo "<h3> Using global keyword with global Variable inside function, we can 
                access the global varibale that is $name </h3>";

     }
     testFunction();
     echo "<h3> Using global Variable inside function that is: $name will show 
                undefined </h3>";

// We can have local variables with the same name in different functions, 
  // because local variables are only recognized by the function
        // in which they are declared.

/* static keyword - when a function is completed/executed, all of its variables are 
                    deleted. However, sometimes we want a local variable NOT to 
                    be deleted. We need it for a further job. To do this, 
                    use the static keyword when first declare the variable */
function testFun() {
    static $staticVAR = 1 . "\n";
    echo $staticVAR;
    $staticVAR++;
}

testFun(); // 1
testFun(); // 2 and so on .. 
