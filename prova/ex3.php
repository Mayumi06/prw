<?php 
$_GET[ $peso ];
 
  if ($imc<17){
      echo "Muito abaixo do peso";
  }
   else {
       if ($imc=17 || $imc<=18.49){
           echo "Abaixo do peso";
       }

       if($imc=18.5 || $imc<=24.99){
           echo "Peso normal";
       }

       if($imc=25 || $imc<=29.99){
        echo "Acima do peso";
    }

       if($imc=30 || $imc<=34.99){
       echo "Obesidade I";
    }

      if($imc=30 || $imc<=34.99){
        echo "Obesidade I";
     }

     if($imc>40){
        echo "Obesidade III";
     }


   }

?>