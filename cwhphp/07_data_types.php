<!-- this contain the types of datatypes in php -->
<?php 
$name = "Rohit";
$income = 200;

/*  php data types

1. String
2. Integer
3. Float 
4. Boolean              <------ Note : the php on false value return blank string we will use var_dump(data_types) function 
5. Object
6. Array
7. NULL

*/

//String - sequence of characters
$name = "Harry";
$friend = "Rohan";
echo "$name ka friend is $friend";
echo "<hr>";
echo "<br>";


// Integer - Non decimal number
$income = 455;
$debts = -713;
echo $income;
echo "<br>";
echo $debts;
echo "<hr>";

// Float - Decimal point number 
$income = 422.9;
$debts =-34.42;
echo "<br>";
echo $income;
echo "<br>";
echo $debts;
echo "<hr>";
echo "<br>";

// Boolean - can be either true or false 
$x = true ;
$is_friend = false;
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
echo "<hr>";
echo "<br>";
// Object - Instances of classes
// Employee is a class ----> rohit can be one object 

// Array - Used to store multiple values in a single variable
$friend = array("rohan", "shubham", "skillf", "Larry");
echo var_dump($friend);
echo "<br>";
echo $friend[0];
echo "<br>";
echo $friend[1];
echo "<br>";
echo $friend[2];
echo "<br>";
echo $friend[3];
echo "<br>";
echo "<hr>";
// echo $friend[4]; // This is gooing to throw error 


// NULL 
$name = null ;
echo var_dump($name);

?>