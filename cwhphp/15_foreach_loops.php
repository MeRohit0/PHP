<!-- In this we discuss the foreach loop in php 

in the syntax 
                foreach ($variable as $key => $value){
                  some statements ;   }
            
               => arrow funtion 
               
            this loop is mainly used in array and objects 
            $key is the gives index number of array or object 
            and $value will give the data of array or object 

-->
<?php
echo"welcome to the world of foreach loop <br>";
$arr = array("Banana", "Apple", "Bread", "Butter");

// for ($i=0; $i < count($arr); $i++) { 
//     echo $arr[$i];
//     echo"<br>";
// }

// Better way to do this - foreach loops

// foreach ($arr as $value) {
//     echo "$value";
//     echo "<br>";
// }

foreach ($arr as $value) {
    echo $value ;
    echo "<br>";
}


?>