<?php
/* Q. DEFINE ARRAY. HOW MANY TYPES OF ARRAYS ARE THESE IN PHP ? 
Arrays are special variables that holds multiple values and of any data types even 
ojects, fuctions and arrays itself.

In PHP, there are three types of arrays:
  Indexed arrays - Arrays with a numeric index
  Associative arrays - Arrays with named keys
  Multidimensional arrays - Arrays containing one or more arrays
*/





 /* In indexed arrays each item has an index number.
   By default, the first item has index 0, the second item has item 1, etc. 
   To access an array item you can refer to the index number
   To change the value of an array item, use the index number  */

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

// Generally we use forEach to loop over array rather than traditional loop

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




