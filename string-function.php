<?php  

#strlen(string length)
$name="Riya";
echo "<br>";
echo "this is my stirng length of my name" . "  " . strlen($name) ;

#str_word_count
$name = "Thakur Riya Singh";
echo "<br>";
echo "My name word count is " . " " . str_word_count($name);

#strrev(reverse string)
$name = "Diksha";
echo "<br>";
echo "My name string reverse is " . " " . strrev($name);

#strpos (pous string )
$name = "Riya best friend is kushum and Deepak ";
echo "<br>";
echo "pouse the string " . " " . strpos($name, "kushum");

# str_replace string replace
$name = "Riya";
echo "<br>";
echo "Replace My second name Riya to Diksha" . " " . str_replace("Riya", "Diksha",  $name);

# str_repeat sting Repeat
$name ="Riya is a good girl";
echo "<br>";
echo "repeat my string " . " " . str_repeat($name, 5);

#rtrim string trim
 $name = "My name is Diko";
 echo "<br>";
 echo "<pre>";
 echo rtrim("   Riya is good girl   ");
 echo "<br>";
 echo ltrim("   riya is good girl   ");
 echo "<pre>";
?>