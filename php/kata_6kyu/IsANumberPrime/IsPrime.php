<?php
function is_prime(int $n) :bool {
  $prime = true;
  $i = 2; 

  if($n <= 1){
    $prime = false;
  }

  while($i < $n && $prime){
	  if($n % $i == 0){
		  $prime = false;
	  }
	  $i++;
  }

  return $prime;
}