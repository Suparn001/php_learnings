<?php
// for declaring a varibale $ symbol is used first with the desired name you want;
// you hva to use variable name alogn with dollar where ever you want to use that variable

$a  = "hello<br>";

echo $a;
echo $a;
echo $a;
echo $a;
echo $a;

/* there is another type of varibale that is CONSTANT VARIABLE
these CONSTANT VARIBALE have global scope. these are case sensitive by default.
to declare constant variable "define"  is used. Example is ->
define(_,_,_)
this takes three parameters-> first is name of variable, 2nd is value of variable, 3rd is fir case sensitve. by default it is case sensitive.
3rd argument takes only boolean value true and false only for case sensitve.
*/
define("greetings","heelo"); // here by default value is true for case senstive
echo greetings."<br>";



define("GREET", "Welcome!");
echo GREET;











?>