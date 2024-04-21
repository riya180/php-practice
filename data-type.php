
<?php 
//data types in php  
# String
$name = "riya";
echo "$name";

#Integer(number) non-decimal number 
$number= 455;
$income = -7363;
echo "<br>";
echo "$number";
echo"<br>";
echo "$income"; 

// float
$number= 2344.32;
$income= -34.98;
echo "<br>";
echo "$number";
echo "<br>";
echo "$income";

#Boolean either true or false
$x= true;
$is_friend= false;
echo "<br>";
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);

#Array - arrya is use to store multiple value in single variable
$friends = array("deepak", "preety", "neha", "sima");
echo var_dump($friends);
echo "<br>";
echo "$friends[0]";
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
//Null

$name = NULL;
echo "<br>";
echo var_dump($name);



?>