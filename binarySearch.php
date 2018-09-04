<?php //php 7.0.8

function middle($left,$right):int{
    return ($left + $right)/2;
}

function binarySearch($array, $key){
    
    $left = 0;
    $right = count($array)-1;
    
    
    
    while ($left <= $right){
        
           $middle = middle($left,$right);
        // $middle = (int)(($left + $right)/2);
        
    if ($key == $array[$middle]){
        
        
        return $middle;
        
    }else
    if ($key < $array[$middle]){
       
        $right = $middle - 1;
       
      
    }else
    if ($key > $array[$middle]){
      
        $left = $middle + 1;
       
        
       
    } 
    }
return -1;
} 

     //               0  1  2  3   4   5   6   7   8   9  10  11  12  13/ 14  15/ 16  17  18/ 19  20  21/ 22  23/ 24
     $numbers = array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97);
     echo (binarySearch($numbers,79)); 
?>
