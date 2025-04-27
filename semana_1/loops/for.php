<?php

for($i = 1; $i <= 10; $i++){
  echo $i . ' ';
}

echo "<br>";
// ; ; "empty" expression is true as default in PHP.
for($i = 1; ;$i++){
  if($i == 11){
    break;
  }
  echo $i . ' ';
}


echo "<br>";

// Looks like while interaction
$i = 1;
for( ; ; ){
  if($i == 11){
    break;
  }

  echo $i . ' ';
  $i++;
}

echo "<br>";
for ($i = 1, $j = 0; $i <= 10; $j += $i, print $j . ' ', $i++);

echo "<br>";
for($i = 15; $i > 0; $i--):
  echo $i . ' ';
endfor;

?>