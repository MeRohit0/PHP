<!-- In this we have log out and thus destroy the all variables  -->
<?php
// Start the session and get the data
session_start();
session_unset();
session_destroy();
echo "<br> You have been logged out";
?>
