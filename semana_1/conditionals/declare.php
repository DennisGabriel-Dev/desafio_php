<?php

declare(ticks=1);

function tick_handler(){
  echo "<br>tick_handler() called. \n";
}

register_tick_function('tick_handler');

$a = 1; // call a tick event

if($a > 0){ // call a tick event
  $a += 1; // call a tick event
  echo "<br>".$a++; // call a tick event
}