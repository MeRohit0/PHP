<!-- In this we use string function on variables like srtlen($name) 
    here if we want to concatinate two strings we will use the . (dot) symbol see 
    example - echo "The length of " . "my string is " . strlen($name);


-->
<?php 

$name = "Harry is a good boy";
echo $name;
echo "<br>";
echo "The length of " . "my string is " . strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, "Harry");
echo "<br>";
echo str_replace("Harry", "Rohan", $name);
echo "<br>";
echo str_repeat($name, 4);
echo "<br>";

echo "<pre>";               //<------ This is pre tag which print exact the content on screen in html (not ignore whitespaces)
echo rtrim("    this is a good boy     ");                      // <---- trim the right side whitespace 
echo "<br>";
echo ltrim("    this is a good boy     ");                      // <---- trim the left side whitespace 
echo "</pre>";


?>