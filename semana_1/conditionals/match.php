<?php

$player = "Fighter";

$verify_player = match ($player) {
  'Elfo' => 'Player is Elfo',
  'Fighter' => 'Player is Fighter',
  'Shark' => 'Player is Shark'
};

var_dump($verify_player);


$age = 22;

$output = match($age){
  $age < 13 => 'Chield',
  $age < 18 => 'Teenager',
  $age > 18 && $age < 60 => 'Adult',
  default => 'Aged'
};

var_dump($output);


$x = 5;
$a = 1;
$b = 2;
$c = 5;
$result = match($x){
  $a, $b, $c => 5, // same as: $a == 5 || $b == 5 || $c == 5
  default => 0
};

var_dump($result);


try{
  print match ($x) {
    1, 2 => 3,
    3, 5 => 5
  }; // if it does not match, must be raise an UnhandledMatchError exception
} catch (\UnhandledMatchError $e){
  var_dump($e);
}
