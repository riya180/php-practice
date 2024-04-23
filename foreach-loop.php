
<?php

echo "welcome to foreach loop <br> ";
$arr = array("milk", "butter", "bread", "apple", "banana");

for ($i=0; $i <count($arr) ; $i++) { 
    echo"<br>";
    echo $arr[$i];
}


/*foreach ($arr as $value) {
    echo"<br>";
    echo $value ;
    echo "<br> ";
}
*/

?>