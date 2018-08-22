<?php //php 7.0.8
//             0  1  2  3   4   5   6   7   8   9  10  11  12  13/ 14  15/ 16  17  18/ 19  20  21/ 22  23/ 24
$prime = array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97);




function mid($min,$max):int{
    return ($min + $max)/2;
}


function binary($array, $number){
    $min = 0;
    $max = count($array)-1;
    $mid = mid($min,$max);
    
    
    while ($max >= $min){
    if ($number == $array[$mid]){
        
        //echo $mid." ".$array[$mid]." ".$number;
        return $mid;
        break;
    }else
    if ($number < $array[$mid]){
       // echo $mid."\n";
        $max = $mid-1;
        $mid = mid($min,$max);
        //echo $mid."\n";

    }else
    if ($number > $array[$mid]){
       // echo $mid."\n";
        $min = $mid+1;
        $mid = mid($min,$max);
        
       // echo $mid."\n";

    } 
    }
return -1;
} 

   echo (binary($prime,8)); 
?>
