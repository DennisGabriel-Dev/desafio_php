<?php

$i = 0;

while(++$i){
  switch($i){
    case 5:
      echo "On five, exit from the switch using break or break 1";
      break 1;
    case 10:
      echo "At ten, finish the while using break 2";
      break 2;
    default:
      break;
  }

  echo "<br>";
}