
<?php 
echo "welcome to function concept in php  <br>";
$riya= [20,45,67,78,45,67];
$sumMarks = processMarks($riya);


function processMarks($marksArr){
    $sum= 0;
    foreach($marksArr as $value){
        $sum += $value;
    }
    return $sum;
}

$sinu= [45,67,78,45,67,43,56];
$sumMarksSinu = processMarks($sinu);

echo "this is my total calclated marks is $sumMarks <br>";
echo "this is my total calclated marks is $sumMarksSinu ";
?>