<?php 
function checkArray($arr,$index){
  $result = [];
  foreach($arr as $key => $value){
    if(is_array($value)){
      $result = array_merge($result, checkArray($value, $index));
    }else{
      if($key === $index){
        $result[] = $value;
      }
    }
  }
  return $result;
}
$arr = [
  'слива',
  ["груша",["мандарин"],],
  "виноград",
  ["яблоко",["банан",["абрикос","вишня"]]]
];

echo'<pre>';
var_dump(checkArray($arr, 0));
echo'</pre>';




echo '<br>';
echo '<br>';
echo '<br>';echo '<br>';
////////// 
  function checkLetterB($str) : string
  {
    if(is_string($str)){
      return substr_count($str,'b');

    }else{
      return false;
    }
  }
  var_dump(checkLetterB('ewdsdsdfbbfdfbfdfbbbdf'));



//////////////

function sumArray($arr){
  $sum = 0;
  foreach($arr as $key => $value){
    if(is_array($value)){
      $sum += sumArray($value);
    }elseif(is_numeric($value)){
      $sum += $value;
    }
  }
  return $sum;
}
$arr = [1, [2, 3, [4, 5]], 6, [7, [8, 9]]];
echo sumArray($arr);
echo '<br>';
echo '<br>';
///////////////
function sumSquare($sSquare,$lSquare): float{
  $count = ($lSquare/$sSquare)**2;
  return floatval($count);
}
echo sumSquare(2,3);
?>
