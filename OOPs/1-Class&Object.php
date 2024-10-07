<?php 
/*
From PHP5, we can write PHP code in an object-oriented style

Procedural programming is about writing lots of functions that perform operations 
on the data, while object-oriented programming is about creating objects that 
contain both data and functions within them.

A class is a template for creating objects, and an object is that instance of a 
class. In class we define properties and behaviors that is inhertied by all its 
objects. 
But Objects can have different values of those properties. For example
we can consider Human as class and its object would be a particular man 
say jon doe with defined properties and behaviors such as the name, age, no. 
of legs, walking .. 

In a class, variables are called properties or constants and functions are 
called methods or even behaivor ! 

Q. HOW OBJECT IS CREATED USING PHP ? 
Objects of a class are created using the new keyword.

Q. HOW TO ACCESS THE PROPERTIES AND METHODS IN PHP ? 
The -> in PHP is called the object operator. It is used to access properties 
and methods of an object. We use -> to get or set the value of a property in an 
object. We can also use -> to call a method (function) that belongs to an object.


A class in php is created simply using keyword class

Q. HOW CAN WE CHECK IF ONE OBJECT BELONGS TO A SPECIFIED CLASS OR NOT ? 
 'instanceof' keyword to check if an object belongs to a specific class

*/  

class Human {
   // Properties 
   public $character1; 
  
   // Methods
   function set_character($char) {
    return $this->character1 = $char;
    /*
    assigning the value from the $char argument to the $character1 property 
    of the object.
    Note that its common to use same argument name as of property
    Q. Why Do We Store the Value Again in a method ?*
    The method's purpose is to assign a new value to the object's property. 
    We need to store this value in the object so that it can be used later.

    */
   
   }  


   
// Q. EXPLAIN WHAT IS 'THIS' KEYWORD IN PHP ? 
/*
The $this keyword refers to the current object itself, and is only available 
inside methods. It allows to access the object's properties and methods from 
within the class.
Here $this->character1 refers to the 'character1' property of 
the current object. And then it is passed to into the method as an argument which
can have any name we choose. 

this is used inside a class, but it only makes sense in the context of an object.
Once an object is created from the class, this refers to that specific object.
So, when you use this inside a method, you’re talking about the object that is
currently using that method.
*/

}

$Jon = new Human(); // a new human object is created 
echo "Jon has " . $Jon->set_character('High Ego, Self Greatness');

echo "<br>";

var_dump($Jon instanceof Human);

echo "<br>";
// directly changing the property value
class Fruit {
    public $name;
  }
  $apple = new Fruit();
  $apple->name = "Apple";
  
  echo $apple->name;