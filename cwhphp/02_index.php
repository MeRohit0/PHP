<!-- This is file no 2  -->

<!-- In this file php will not going to see at clint side 
you can check at source code in browser as php is executed at server side and 
then only produce output to client (i.e browser) -->

<!-- this is first execute in all the php and then produce output    -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo "This is "; echo "Title"; //this will not going to see at clint side  ?>  </title>
</head>
<body>

<?php

echo "<h1>Hello World 1 </h1><hr>";
echo "This is 2nd file tutorial and first is installation guide  " ;

?>
    
</body>
</html>