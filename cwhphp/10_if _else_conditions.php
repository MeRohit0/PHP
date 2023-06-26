<!--  In this wee have discuss about the if else and if elseif else ladder  -->
<?php 
// For example, we have two variables $a = 65; and $b = 9;

$a = 665;

$b = 9;

If($a > 78){

Echo "a is greater than 78" . "<br>";

}

Else{

Echo "a is not greater than 78". "<br>";

}


// if - elseif - else ladder 


$age = 24;

If ($age>18){

Echo "you can drink water with chai and alcohol". "<br>";

}

Elseif($age>13){

Echo "you can drink chai only with water. No alcohol for you". "<br>";

}

Else{

Echo "you can drink water only". "<br>";

}

// Quick quiz - 
// 1. Create an if else ladder using more than one elseif 
// 2. Write a program to allow a driver to drive only when his age is greater than or equal to 25
// and less than or equal to 65

$age = 45;

if($age >= 25 or $age <=65 ){
echo "This person can drive <br>";
}
elseif ($age > 65 ) {
    echo "This person cannot drive <br> "; 
}
else {
    echo "This person cannot drive <br> "; 
}

?>