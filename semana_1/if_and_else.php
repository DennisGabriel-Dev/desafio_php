<?php 
$idade = 18;

echo "Com " . $idade ." anos, ";
if($idade >= 18):
  echo "pode tirar a carteira";
else:
  echo "não pode tirar a carteira";
endif;

echo "<br>";

echo $idade . " anos é ";
if($idade >= 18){
  echo "Maior de idade";
} else {
  echo "Menor de idade";
}

