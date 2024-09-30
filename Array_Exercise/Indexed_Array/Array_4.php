<?php
$fruits=array("apple","banana","grapse","chery","orange");
//Asscending Order:
$f=$fruits;
asort($f);
print_r($f);
echo "<br><br>";
//Descending Order:
$f=$fruits;
rsort($f);
print_r($f);
?>
