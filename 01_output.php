<?php 
/*This is a php tag. If there is no html or other content below the php, 
we don't need to close the php tag which can be found at the last. 

-> A PHP script can be placed anywhere in the document.
-> A PHP script is executed on the server, and the plain HTML result 
is sent back to the browser.
-> PHP is the ugliest language, atleast syntax wise other than this, 
   it is powefull and still used today even though many hates it. 
   fact: Facebook still uses PHP as its backend stack
         People may hate php but even haters love Larvel, the PHP framework 
         PHP is mostly used in mid range startups or companies  
         Many developers started thier career with PHP */



// basic ways to get output: echo and print


// Echo - Output strings, numbers, even html
echo 'Hello PHP' .PHP_EOL;
echo 996969   .PHP_EOL;
echo '<h1>Hello-PHP </h1>';
            // .PHP_EOL similar to new line character (works best for multi os than /t)


// we can also use print but it take only single argument 
      // and () is purely optional and better to avoid it 
print 'printPHP' .PHP_EOL;

// print_r - Gives a bit more info. Can be used to print arrays
    // it is a function so here we need () 
print_r([1, 2, 3])  .PHP_EOL;

// var_dump - Provides more info like data type and length
var_dump('Hello') .PHP_EOL;
var_dump([1, 2, 3]) .PHP_EOL;


// these outputs will look ugly for sure but intersting things will come .. 
?>
  



<!-- You can output any HTML that you want within a .php file -->
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
  <h1>Hello <?php echo 'PHP'; ?></h1>
</body>
</html>