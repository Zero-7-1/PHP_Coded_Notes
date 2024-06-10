<?php 
// DEFINE EXPRESSIONS AND HOW IT DIFFERS FROM STATEMENT ? 
// "Anything that has a value" 
/* 
The most basic forms of expressions are constants and variables. 
Slightly more complex examples for expressions are functions.

Whereas 
Statements performs an action and ends with a semicolon or enclosed within curly braces 

*/

/* Operator are used to perform operation.
   Operator are mainly divided by three groups.
   1.Uniary Operators that takes one values    (logical not, increment, decrement )
   2.Binary Operators that takes two values    (airthmetical)
   3.ternary operators that takes three values (terniary)
*/

// Arithmetic Operators
/* 
  +$a  Identity Conversion of $a to int or float as appropriate.
  -$a	Negation	Opposite of $a.
  $a + $b	Addition	Sum of $a and $b.
  $a - $b	Subtraction	Difference of $a and $b.
  $a * $b	Multiplication	Product of $a and $b.
  $a / $b	Division	Quotient of $a and $b.
  $a % $b	Modulo	Remainder of $a divided by $b.
  $a ** $b	Exponentiation	Result of raising $a to the $b'th power. 
  
*/


// Increment/decrement Operators
/*   
++$a	Pre-increment	Increments $a by one, then returns $a.
$a++	Post-increment	Returns $a, then increments $a by one.
--$a	Pre-decrement	Decrements $a by one, then returns $a.
$a--	Post-decrement	Returns $a, then decrements $a by one.
*/








/*
 * PHP Operator Precedence and Associativity For Reference 
 * -----------------------------------------
 * Operators are listed from highest to lowest precedence.
 * Associativity is indicated as (L)eft-to-right or (R)ight-to-left.
 */

// 1. Unary Operators (R)
$cloneObj = clone $obj;    // clone $obj
// $newObj = new ClassName(); // new ClassName()
$castInt = (int) $var;     // (type) $var

// 2. Exponentiation (R)
$result = $a ** $b;        // $a ** $b

// 3. Unary Operators (R)
$neg = -$a;                // - $a
$pos = +$a;                // + $a
$not = !$a;                // ! $a
$inv = ~$a;                // ~ $a
$suppress = @$a;           // @ $a

// 4. Multiplication, Division, Modulus (L)
$result = $a * $b;         // $a * $b
$result = $a / $b;         // $a / $b
$result = $a % $b;         // $a % $b

// 5. Addition, Subtraction (L)
$result = $a + $b;         // $a + $b
$result = $a - $b;         // $a - $b

// 6. Bitwise Shift (L)
$result = $a << $b;        // $a << $b
$result = $a >> $b;        // $a >> $b

// 7. Comparison (L)
$result = $a < $b;         // $a < $b
$result = $a <= $b;        // $a <= $b
$result = $a > $b;         // $a > $b
$result = $a >= $b;        // $a >= $b

// 8. Equality (L)
$result = $a == $b;        // $a == $b
$result = $a != $b;        // $a != $b
$result = $a === $b;       // $a === $b
$result = $a !== $b;       // $a !== $b
$result = $a <=> $b;       // $a <=> $b

// 9. Bitwise AND (L)
$result = $a & $b;         // $a & $b

// 10. Bitwise XOR (L)
$result = $a ^ $b;         // $a ^ $b

// 11. Bitwise OR (L)
$result = $a | $b;         // $a | $b

// 12. Logical AND (L)
$result = $a && $b;        // $a && $b

// 13. Logical OR (L)
$result = $a || $b;        // $a || $b

// 14. Null Coalescing (L)
$result = $a ?? $b;        // $a ?? $b

// 15. Conditional (Ternary) Operator (R)
$result = $a ? $b : $c;    // $a ? $b : $c

// 16. Assignment (R)
$a = $b;                   // $a = $b
$a += $b;                  // $a += $b
$a -= $b;                  // $a -= $b
$a *= $b;                  // $a *= $b
$a /= $b;                  // $a /= $b
$a %= $b;                  // $a %= $b
$a **= $b;                 // $a **= $b
$a &= $b;                  // $a &= $b
$a |= $b;                  // $a |= $b
$a ^= $b;                  // $a ^= $b
$a <<= $b;                 // $a <<= $b
$a >>= $b;                 // $a >>= $b
$a .= $b;                  // $a .= $b
$a ??= $b;                 // $a ??= $b

// 17. Logical AND (L)
$result = $a and $b;       // $a and $b

// 18. Logical XOR (L)
$result = $a xor $b;       // $a xor $b

// 19. Logical OR (L)
$result = $a or $b;        // $a or $b





?>











