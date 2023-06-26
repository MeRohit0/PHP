<!-- Here we learn about function (Defination and call) 

we have to use the function as keyword ;

set its parameter and call or invoked ;

2 types of function --- inbuild and user define 

-->

<?php 

function totalmarks($array){
    $sum = 0;
    foreach ($array as $value) {
        $sum += $value;
    }
    return $sum;
}

function avgMarks($array){
    $sum = 0;
    $i = 1;
    foreach ($array as $value) {
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}


$rohanDas = [24,52,18,35,82,98];
$sumMarks = totalmarks($rohanDas);

echo "Total marks scored by RohanDas is " .  $sumMarks . "<br>";
echo "Average Marks scored  by RohanDas is " . avgMarks($rohanDas) . "<br>";

?>