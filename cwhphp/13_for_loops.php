<!-- In this we have use the for loop  -->
<?php

echo "This is for loop in action <br>";

$no = 5 ;                                    
for ($no=0; $no <5 ; $no++) {                           //<----- here the variable no is local variable  
    echo "for loop run for $no <br>"; 
}
echo"<br>$no<br>";

for ($index=1; $index < 6; $index++) { 
    // for(initialization;condition; updation)
    echo "The number is $index <br>";
}

// Avoid running into infinite loops
// for ($i=0; $i < 87; ) { 
//     echo $i;
// }

echo "For loop has ended";
?>
