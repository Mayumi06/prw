<?php
   $salario=400;
   $reajuste1=0;
   $reajuste2=0;

   if ($salario<=300){
      $reajuste1 = $salario + $salario * 0.5;
   
    echo "O valor do salário é:" .$reajuste1;
   }
    if ($salario > 300){
        $reajuste2 = $salario + $salario * 0.3;
    }
    echo "O valor do salário é:" .$reajuste2;

?>