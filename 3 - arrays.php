<?php
/* 
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
var_dump($fruits);


// Outputting values from an array
echo $numbers[0] . "\n";
echo $numbers[3] + $numbers[4] . "\n";



// Associative arrays allow us to use named keys to identify values.
$colors = [
  1 => 'red',
  2 => 'green',
  3 => 'blue',
];
echo $colors[1];
// Strings as keys
$hex = [
  'red' => ' #f00',
  'green' => '#0f0',
  'blue' => '#00f',
];
echo $hex['red'];
var_dump($hex);








