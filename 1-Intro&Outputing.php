<?php 
/*This is a php tag. If there is no html or other content below the php, 
  we don't need to close the php tag which can be found at the last. 

-> A PHP script can be placed anywhere in the document.
-> A PHP script is executed on the server, and the plain HTML result 
   is sent back to the browser.
-> PHP is a powefull language powering general websites  
   even though many think that php is not worthful language, 
   it is still used widely in many websites. 
   fact: Many websites use PHP as its backend stack
         People may hate php but even haters love Larvel, the PHP framework 
         PHP is mostly used in companies that are not big corporates   
         Many developers started thier career with PHP
         so, php is still there and will remain for enternity..  */



// Q. WHAT ARE THE BASIC WAYS OF GETTTING OUTPUT IN PHP ? 


// Echo - Output strings, numbers, even html
echo "Hello PHP \n";
echo 10101010;
echo '<h1> Hello PHP </h1>';
            /* To output content in PHP on a new line, 
             we can use the newline character \n  inisde "double quotes"
             or <br> tag for html contents  */
            // .PHP_EOL similar to new line character (works good for multi os)


// we can also use print in place of echo but it takes only single argument and 
   // returns 1, so it can be used in expressions 
      // and () is purely optional both for echo and print and better to avoid it 

// Q. DIFFERENCE BETWEEN ECHO AND PRINT.  

print 'printPHP' . "\n";
           /* The \n inside the double quotes (" ") is interpreted correctly 
              as a newline character, but the single quotes (' ') around 'printPHP'
              prevent PHP from interpreting \n as a newline character. 
              Instead, it treats it as part of the string.
              To fix this, we can either concatenate the newline character
              yes in PHP we use dot for concat or 
              use double quotes around the entire string */

// print_r - Gives a bit more info, commonly used to print arrays
 // it is a function so here we need () 
print_r([1, 2, 3])  . "\n";
  // we will do explanation of the output in arrays file 

// var_dump - Provides more info, data type and length
var_dump('Hello') .PHP_EOL;
var_dump([1, 2, 3]) .PHP_EOL;

   // DIFFERENCE BETWEEN PRINT_R AND VAR_R.  


// these outputs will look ugly for sure in browser 
?>
  




  
<!-- We can output any HTML that we want within a .php file -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My PHP Website</title>
</head>
<body>
  <!-- We can output PHP including variables, etc -->
  <h3>Hello <?php echo 'from PHP'; ?></h3>
</body>
</html>