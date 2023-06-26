<!-- in this we have access and print the 2 D and 3 D array  -->
<?php

echo "Welcome to the multi dimensional arrays in php <br>";

//creating a 2 dimensional array
$multiDim = array(array(2,5,7,8),
            array(1,2,3,1),
            array(4,5,0,1));

// echo var_dump($multiDim);
// echo $multiDim[2][3];

// Printing the contents of a 2 dimensional array 

// for ($i=0; $i < count($multiDim); $i++) { 
//     echo var_dump($multiDim[$i]);
//     echo "<br>";
// }


//Printing of 2D array 

// for ($i=0; $i < count($multiDim); $i++) { 
//     for( $j=0; $j < count ($multiDim[$i]) ; $j++) {
//         echo $multiDim[$i][$j];
//         echo " ";
//     }
//     echo "<br>";
// }

//crearting a 3 D array 
$multiDim2 = array(array(array(2,5,8,3),array(7,3,8,5),array(73,5,27,2)),
                    array(array(82,5,36,33),array(8,32,81,5),array(3,5,2,36)),
                    array(array(27,53,8,22),array(79,35,8,53),array(43,5,7,2)));

//Printing a 3D array 

for ($i=0; $i < count($multiDim2); $i++) { 
    for( $j=0; $j < count ($multiDim2[$i]) ; $j++) {
        for ($k=0; $k < count($multiDim2[$i][$j]); $k++) { 
            echo $multiDim2[$i][$j][$k];
            echo " ";
        } echo "<br>";
    }
    echo "<br>";
}



?>