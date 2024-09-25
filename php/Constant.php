<!-- syntax : 
 define(name,value,case-insensitiv) 
 
 name: specifies the name of the constant.
 value: specifies the value of the constant.
 case-insensitive: specifies whether the constant name should be case-insensitive or not.Default is false-->

<?php
define("Greeting", "Welcome to NoteJunction");
echo Greeting;
?>

<?php
define("Greetings", "Welcome to NoteJunction", true);
echo Greetings;
?>

<!-- the const keyword defines constants at compile time.It is faster than define() and is always case sensitive. -->

<?php
const Message = "Hello const";
echo Message;
?>