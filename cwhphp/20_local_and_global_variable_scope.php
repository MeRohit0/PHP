<!-- In this we have discuss the global and local array scope  

we have to use global in function use specipy that its can access the global variable 

and $GLOBALS variable is store all the global variable also called as superglobal variable  ;

-->
<?php
echo "Welcome to scope and local/global vars in php<br>";
$a = 98; // Global Variable
$b = 9;

function printValue(){
    // $a = 97; // Local Variable
    global $a, $b; // Give me the access to this global variable
    $a = 100;
    $b = 1000;
    echo "<br>The value of your variable a is $a and b is $b";
}

echo $a; 
printValue();
echo "<br>The value of your variable a is $a and b is $b";
echo "<br>";
echo var_dump($GLOBALS);                //<-------this is the GLOBAL variable 
// echo var_dump($GLOBALS["a"]);
// echo var_dump($GLOBALS["b"]);

?>
