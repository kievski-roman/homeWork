<?php 
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

count($arr) ;

$moveArr = array_splice($arr, 0, 4);
$arr = array_merge($arr, $moveArr);

$sum = $arr[3] + $arr[4] + $arr[5];



$firstArr = [

  'one' => 1,

  'two' => 2,

  'three' => 3,

  'foure' => 5,

  'five' => 12,

];

$secondArr = [

  'one' => 1,

  'seven' => 22,

  'three' => 32,

  'foure' => 5,

  'five' => 13,

  'six' => 37,

];
$arrDiffSecond = array_diff($secondArr, $firstArr);
$arrDiffFirst = array_diff($firstArr, $secondArr);

$withoutDifferent = array_intersect($firstArr, $secondArr);
$different = array_diff_assoc($firstArr, $secondArr);

$firstArr = [

  'one' => 1,

  'two' => [

    'one' => 1,

  'seven' => 22,

  'three' => 32,

  ],

  'three' => [

'one' => 1,

'two' => 2,

  ],

  'foure' => 5,

  'five' => [

   'three' => 32,

   'foure' => 5,

   'five' => 12,

],  
];

$secondItem = [];
foreach ($firstArr as $key => $value) {
    if (is_array($value) && isset(array_values($value)[1])) {
        $secondItem[] = array_values($value)[1];
    }
}

$total = count($firstArr, COUNT_RECURSIVE);

function arraySum($array) {
  $sum = 0;
  foreach ($array as $value) {
      if (is_array($value)) {
          $sum += arraySum($value);
      } else {
          $sum += $value;
      }
  }
  return $sum;
}

$totalSum = arraySum($firstArr);



?>
