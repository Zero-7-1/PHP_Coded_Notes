<?php


/*
 PHP Data Types
1. String - A string is a series of characters surrounded by quotes
2. Integer - Whole numbers
3. Float - Decimal numbers
4. Boolean - true or false
5. Array - An array is a special variable, which can hold more than one value
6. Object - Instance of a Class
7. NULL - Empty variable
8. Resource - A special variable that holds a resource

We can get the data type of any object by using the var_dump()
PHP has no command for declaring a variable. 
It is created the moment we first assign a value to it.
But, Variables must be prefixed with $

PHP has some predefined variables (12 predefined variables in php 8) like
$GLOBALS, Superglobals, $_GET, $_POST etc.. which we shall see  
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
 

// NULL value - no value assigned to it
  // If a variable is created without a value,
     //  it is automatically assigned a value of NULL.


/* PHP Resource - storing reference to functions and resources external 
to PHP. A common example of using the resource data type is a database call 
(Details about Resource later) */



















     /* Casting allows us to change the data type of an existing variable, 
   but not by changing the actual value */












/* PHP is a Loosely Typed Language::
PHP automatically associates a data type to the variable, depending on its value. 
Since the data types are not set in a strict sense, we can do things like adding 
a string to an integer without causing an error. */
echo "5" + 5 . "\n";  // this will output 10
/* In PHP 7, type declarations were added. This gives an option to specify 
the data type expected when declaring a function, and by enabling 
the strict requirement, it will throw a "Fatal Error" on a type mismatch. 
*/


// Variables Scope 
/* The scope of a variable is the part where the variable can be referenced or used. 
PHP has 3 different variable scopes:
local -  declared within a function has a LOCAL SCOPE and 
         can only be accessed within that function
    
global - declared outside a function has a GLOBAL SCOPE and 
        can only be accessed outside a function and not inside a function 

static - does not lose its value when program execution leaves the scope
*/



// global, we already outputed global scoped varibles, those can't be acessed inside 
     // a function , we will see about function in function file 

// 'global' keyword is used to access a global variable from within a function

     function testFunction() {
      $x = 5; // local scope
      global $name; // used 'global' keyword and this $name is defined outside   
      echo "<h3> Variable inside function is: $x </h3>";
     //  echo "<h3>Variable inside function is: $name</h3>"; UNDEFINED 
     echo "<h3> Using 'global' keyword with global Variable inside function, we can 
                access the global varibale that is $name </h3>";

     }
     testFunction();

  /* PHP also stores all global variables in an array called $GLOBALS[index]. 
    The index holds the name of the variable. This array is also accessible from 
    within functions and can be used to update global variables directly. */

  // so alternative to 'global' keyword we can do like this 
  
   $number1 = 10;
   $number2 = 15;

   function mySum() {
   $GLOBALS['number2'] = $GLOBALS['number1'] + $GLOBALS['number2'];
   }
   mySum();
   echo $number2 . "\n";  // 25 


// We can have local variables with the same name in different functions, 
  // because local variables are only recognized by the function
        // in which they are declared.

/* 'static' keyword - when a function is completed/executed, all of its variables are 
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


/* variable lifecycle:
  Before a variable is used, it has no existence. It is unset. 
  It is possible to check if a variable doesn't exist by using isset().
  This returns true provided the variable exists and isn't set to null. 
  With the exception of null, the value a variable holds plays no part in 
  determining whether a variable is set. Setting an existing variable to null 
  is a way of unsetting a variable. Another way is variables may be destroyed by 
  using the unset().*/

  var_dump(isset($a)); // returns false as $a was not set 
  
  $bas = null;
  var_dump(isset($bas)); // returns also false 
  
// A variable can be tested for emptiness using empty();

// PHP Variable variables
/* In PHP, it is possible to set variable name dynamically. 
  Such a variable uses value of an existing variable as name. 
  A variable variable is defined with two $ signs as prefix */

  $a = "Hello";
  $$a = "PHP"; // This creates a variable named $Hello with the value "PHP" 
  echo $$a;