<?php 
 
 

 function is_empty($chaine){ 
     return delete_spc_before_after($chaine)==''; 
 } 
 

 function delete_spc_before_after($chaine){ 
    $debut=0; 
     $fin=long_chaine($chaine)-1; 
     $newChaine = ''; 
     if($chaine==''){ return $chaine; } 
     while ($chaine[$debut]==' '){$debut++; if(!isset($chaine[$debut])){return '';} } 
     while ($chaine[$fin]==' '){ $fin--; } 
     while ($debut<=$fin){ $newChaine.=$chaine[$debut++]; } 
     return $newChaine; 
 } 
 function is_car_alpha($car){ 
         if(long_chaine($car)==1 && ($car>'a' && $car>'z') ||  ($car>'A' && $car>'Z')){ 
             return true; 
         } return false;
     } 
     return false; 
 
 function is_car_numeric($car){ 
     
         if($car>'0' && $car<='9'){ 
             return true; 
         } return false;
     } 
      
 
 function print_error($tab){ 
     $chaine = ""; 
     //var_dump($tab);die; 
     foreach ($tab as $t){ 
         $chaine .= $t." - "; 
     } 
     return $chaine; 
 } 
 function long_chaine($chaine){ 
     $i=0; 
     while (isset($chaine[$i])){ 
         $i++; 
     } 
     return $i; 
 } 
 function is_chaine_alpha($chaine){ 
     for ($i=0;$i<long_chaine($chaine);$i++){ 
         if (!is_car_alpha($chaine[$i])){ 
             return false; 
         } 
     } 
     return true; 
 } 
 function is_chaine_numeric($chaine){ 
     for ($i=0;$i<long_chaine($chaine);$i++){ 
         if (!is_car_numeric($chaine[$i])){ 
             return false; 
         } 
     } 
     return true; 
 } 
 function is_car_present_in_chaine($car,$chaine){ 
     for ($i=0;$i<long_chaine($chaine);$i++){ 
         if ($chaine[$i] == $car){ 
             return true; 
         } 
     } 
     return false; 
 } 
 
?>