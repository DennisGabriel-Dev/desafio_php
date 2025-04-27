<?php
// challenge: remove the even numbers.
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$array = array_filter($array, function($element) {
  return $element % 2 === 1;
});

print_r($array);