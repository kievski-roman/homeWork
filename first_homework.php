<?php 
$numbers1 = 7 / 3;
print_r($numbers1. "</br>") ;

$numbers2 = intval(7 / 7.15) ;
print_r($numbers2. "</br>");

print_r(sqrt(25). "</br>");

$phrase = "Десять негритят пошли купаться в море";
$wordFour = explode(" ", $phrase);
echo $wordFour[3];
echo "</br>";
$str = mb_convert_case($phrase, MB_CASE_TITLE, "UTF-8");
echo $str;
echo "</br>";
echo mb_substr($phrase, 16 ,1);
echo "</br>";
echo mb_strlen($phrase);


var_dump(true == 1);
var_dump(false === 0);

print_r("</br>");
var_dump(strlen('three'), strlen('три'));

$a =125*13+7;
$b =223+28*2;
print_r("</br>");
var_dump( $a , $b);
?>

