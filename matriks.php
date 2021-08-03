<?php
$matriksA = [
    [6,3,2],
    [4,2,3]
];
$matriksB =[
    [1,2],
    [2,3],
    [3,1]
];
for ($i=0; $i < count($matriksA) ; $i++) { 
   for ($j=0; $j < count($matriksB[$i]) ; $j++) { 
       $hasil = 0;
       for ($k=0; $k < count($matriksA[$i]) ; $k++) { 
        $hasil += $matriksA[$i][$k] * $matriksB[$k][$j];
       }
       echo $hasil." ";
   } 
   echo nl2br("\n");
}
?>