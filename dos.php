<?php

// Declaracion de las variables


$first=$_POST['extend'];
// $second=$_POST['number'];
$select=$_POST['select'];
$limite=$_POST['limit'];


// funcion array

$array=array();

for ($i=0; $i <$first ; $i++) { 
    $array[$i]=rand(0,$limite);    
}

for ($i=0; $i <count($array) ; $i++) { 
    echo $array[$i].', ';
}

function tomar($select,$array){
    //Decision de oper''aciones

    if ($select=="suma") {
        
        $sum=0;
       for ($i=0; $i <count($array) ; $i++) { 
            $sum+=$array[$i];
        }
        return $sum; 


    }else if ($select=="promedio") {

        $sum=0;
        for ($i=0; $i <count($array) ; $i++) { 
                $sum+=$array[$i];
            }
        return $sum/count($array); 

    }else if ($select=="Mayor"){

        $mayor=0;
        foreach ($array as $valor) {
          if ($valor>$mayor)
           $mayor = $valor;
        }
        return $mayor;

       
        
    }elseif ($select=="menor") {
        $mayor=0;
        foreach ($array as $valor) {
          if ($valor<$mayor)
           $mayor = $valor;
        }
        return $mayor;
    }
    
}





echo "<br>el resultado del (la) $select es =".tomar($select,$array);







?>