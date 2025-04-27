<?php

$array = [1, 2, 3, 4, 5];

foreach($array as $value){
  echo "Current element: $value <br>";
}

$array = [
  "one" => 1,
  "two" => 2,
  "three" => 3,
  "four" => 4,
  "five" => 5
];


echo "<br>";
foreach($array as $key => $value) {
  echo "Key: $key, Value: $value. <br>";
}

echo "<br>";
$grid = [];
$grid[0][0] = 'a';
$grid[0][1] = 'b';
$grid[1][0] = 'y';
$grid[1][1] = 'z';

foreach($grid as $y => $row){
  foreach($row as $x => $value){
    echo "On position x=$x and y=$y: value is $value <br>";
  }
}
echo "<br>";
foreach(range(1, 10) as $value){
  echo $value . ' ';
}

echo "<br>";

// Unpacking Arrays

$array = [
  [1, 2],
  [3, 4]
];

foreach ($array as [$a, $b]){
  echo "A: $a; B: $b\n";
}
echo "<br>";
foreach($array as list($a, $b)){
  echo "A: $a; B: $b\n";
}

echo "<br>";
$array = [
  [1, 2, 3],
  [4, 5, 6]
];

foreach($array as [$a, $b]){
  echo "A: $a; B: $b\n";
}

echo "<br>";
foreach($array as [, ,$c]){
  echo "C: $c\n";
}

echo "<br>";
foreach($array as list(, ,$c)){
  echo "C: $c\n";
}

// foreach with references
$arr = [1, 2, 3, 4];
foreach ($arr as &$value){
  $value = $value * 2;
} // $arr is now [2, 4, 6, 8]

// without an unset($value), $value is still a reference to the last item: $arr[3]
unset($value); 