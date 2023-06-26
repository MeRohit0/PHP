<!-- use the function date and to set its parameters use the manual of php  -->
<?php date_default_timezone_set('Asia/Dhaka');
echo "Welcome to the world of dates <br>";

$d = date("dS F Y , g:i A");
echo "Todays date is $d <br>";

//print something like : Monday *th of August 2005 03:12:46 PM 
echo date('l js \of F Y h:i:s A');

$year = date('y');
echo "Copyright $year | All rights reserved <br>";

// Prints something like: Monday 8th of August 2005 03:12:46 PM   
echo date('l jS \of F Y h:i:s A');      /*    <----- Note : \ (backward slach) is used to ignore the command if there is there exist

*/

?>