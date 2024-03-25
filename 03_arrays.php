<?php
/* Arrrays are data types or data structures that holds multiple values  */


// Simple array of numbers using sq. brace 
$numbers = [1, 2, 3, 4, 5];
     // or array function 
$fruits = array('apple', 'banana');

// outputting arrays 
print_r($fruits);
var_dump($fruits);

// Outputting values from an array
echo $numbers[0];
echo $numbers[3] + $numbers[4];

// We can use print_r or var_dump to see the contents of an array
var_dump($numbers);

/*
  Associative arrays allow us to use named keys to identify values.
*/

$colors = [
  1 => 'red',
  2 => 'green',
  3 => 'blue',
];
echo $colors[1];
// Strings as keys
$hex = [
  'red' => '#f00',
  'green' => '#0f0',
  'blue' => '#00f',
];
echo $hex['red'];
var_dump($hex);




/*
  Multi-dimansional arrays are often used to store data in a table format. Arrays within
   arrays 
*/

// Single person
$person1 = [
  'first_name' => 'Sudhanshu',
  'last_name' => 'Sekhar',
  'email' => 'ssb@gmail.com',
];
echo $people1['first_name'];

// Array of people
$people = [
  $person1, //   [...$person1]
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@gmail.com',
  ],
  [
    'first_name' => 'Jane',
    'last_name' => 'Doe',
    'email' => 'jane@gmail.com',
  ],
];
var_dump($people);

// Accessing values in a multi-dimensional array
echo $people[0]['first_name'];
echo $people[2]['email'];



