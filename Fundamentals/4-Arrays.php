<?php
/* Q. HOW MANY TYPES OF ARRAYS ARE THERE IN PHP ? ***
   Arrays are special variables that holds multiple values and of any data types even 
   ojects, fuctions and arrays itself.

  In PHP, there are three types of arrays:
  Indexed arrays - Arrays with a numeric index
  Associative arrays - Arrays with named keys
  Multidimensional arrays - Arrays containing one or more arrays

Q. EXPLAIN EACH OF THE TYPES OF ARRAY. ***
*/

 /* Indexed Array
   In indexed arrays each item has an index number.
   By default, the first item has index 0, the second item has item 1, etc. 
   To access an array item we refer to the index number
   To change the value of an array item, also use the index number  */

// Simple array of numbers using sq. brace 
$numbers = [1, 2, 3, 4, 5];
     // or using array function 
$fruits = array('apple', 'banana');

// outputting arrays 
print_r($fruits);

echo "<br>";
echo "<br>";

var_dump($fruits);

echo "<br>";
echo "<br>";
 
// Outputting values from an array
echo $numbers[0] . "\n";
echo "<br>";

echo $numbers[3] + $numbers[4] . "\n";
echo "<br>";
echo "<br>";

// Associative Array 
// Associative arrays allow us to use named keys to identify values.
$colors = [
  1 => 'red',
  2 => 'green',
  3 => 'blue',
];
echo $colors[1];
echo "<br>";
echo "<br>";

// We could also have Strings as keys
$hex = [
  'red' => ' #f00',
  'green' => '#0f0',
  'blue' => '#00f',
];
echo $hex['red'];
echo "<br>";

var_dump($hex);
echo "<br>";
echo "<br>";

/* Q. HOW DO WE ADD ITEMS TO AN ALREADY CREATED ARRAY IN PHP ? 
 To add multiple items to an existing array, we use the array_push() for indexed
 and   += operator for associative array */ 

$Vegetables = [
    'One' => 'Potato',
    'Two' => 'Ladyfinger',
];
$Vegetables += ['Three' => 'Brucoli'];
print_r($Vegetables);

echo "<br>";
echo "<br>";

$Vegetables2 = ['Brinjal','Curly Flower'];
array_push($Vegetables2, 'Tomamto');
print_r($Vegetables2);

echo "<br>";
echo "<br>";

/*
Array Functions - The real strength of PHP arrays are the built-in array functions:
count() function for counting array items, 
array() to create fresh array,
array_push() to add item to the end of indexed array, 
array_pop() pops the element off the end of an array,
*/
$cars = array("Volvo", "BMW", "Toyota");
$count = count($cars);
echo "No. of Items in this Array are " . $count;

echo "<br>";
echo "<br>";







// Generally we use forEach to loop over array rather than traditional loop

// looping indexed array to print all the values inside the array 
$Mobiles1 = ['Realme', 'OnePlus', 'Asus'];
foreach ($Mobiles1 as $Mobile) {
  echo $Mobile . "\n";
}
/*For each iteration, the current element's value from $Mobiles1 is assigned to the 
variable $Mobile.*/

echo "<br>";
echo "<br>";

// looping associative arary to print all the values inside the array 
$Mobiles2 = [
  'Realme' => "Rs. 30,000",
  'OnePlus' => "Rs. 49,000",
  'Asus' => "Rs. 45,000"
];
foreach ($Mobiles2 as $Mobiles => $price) {
  echo $Mobiles . "-" . $price . "\n";
}  
/* $Mobiles2 as $Mobiles => $price For each iteration, the current key from 
$Mobiles2 is assigned to $Mobiles, and the corresponding value is assigned to $price.
*/


echo "<br>";
echo "<br>";



/*
Q. CAN WE HAVE BOTH INDEXED AND NAMED KEY FOR AN ARRAY ? 
Yes, it is possible by creating an empty array first then adding mix of indexed 
and key to it. 
*/
$myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";

var_dump($myArr);


echo "<br>";
echo "<br>";

/* Q. HOW CAN WE EXCEUTE A FUNCTION WITHIN AN ARRAY ? 
Excecuting a Function Item within Array, To execute such a function, use the 
index number followed by parentheses (). There are actually two ways of doing it:
First, store function name as string inside array if function defined outside array
and call it using index number and ().
Second, we can directly store an anonynmous function and then call it 
*/

function aFunction() {
  echo "I come from a function!";
}
$myArr2 = array("a String", 15, "aFunction");
$myArr2[2]();

echo "<br>";

$myArr3 = array("a String", 15, 
          function() {
            echo "I came from an unnamed fucntion";
          });
$myArr3[2]();