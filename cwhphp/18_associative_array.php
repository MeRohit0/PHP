<!-- In this we have learn about the associative array in php -->
<?php 

echo "<h1>Welcome to associative array in php</h1>";
echo '<br>';

/* 

They are called indexed array                 <---------- index is start from 0 to (size-1)

$arr = array('this','that','what');
echo $arr[0];
echo '<br>';
echo $arr[1];
echo '<br>';
echo $arr[2];
echo '<br>';

*/

// Associative Array                <---------  This have key-value pair and assess only throught it ;

//                                     NOTE :         They cannot access through index number it will give error ; 


$favCol = array('shubham' => 'red',
                'rohan' => 'blue', 
                'harry' => 'green', 
                8 => 'this' );

    foreach ($favCol as $key => $value) {
    echo "Favourite colour of $key is $value<br>";
}

// echo $favCol['shubham'];             
// echo $favCol[0];                        // This will give error on access thorugh index number   
// echo $favCol[1];                




?>