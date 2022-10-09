<?php
$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
$result = array_map(function (int $number): string{
  return $number % 2;  
  }, $numbers); 
for($i=0; $i<count($result); $i++){
    if ($result[$i] % 2 == 0){
    echo "четное ";
    }else{
    echo "нечетное ";
    }
    print_r("{$result[$i]}\n");
};
    
