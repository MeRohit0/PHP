<!-- In this we have create a cookie  -->
<?php
echo "Welcome  to the world of cookies <br> ";

//Cookies | Sessions

// cookies are used to store the information which is not sensitive like username and password
// but on sessions we used them to store sensitive data like the username and password 


//Syntax to set a cookie
// echo time ();

setcookie("category" , "Books" , time() + 86400 , "/");
echo "The cookie is set <br>";



?>