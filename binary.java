//'main' method must be in a class 'Rextester'.
//Compiler version 1.8.0_111

import java.util.*;
import java.lang.*;

class Rextester
{  
    public static int binarySearch(int[] array, int num){
        int min = 0;
        int max = array.length;
        int mid = (min + max)/2;
        
        while(max >= min){
            if (num == array[mid]){
                 return mid;
                
                
            }else if (num < array[mid]){
               max = mid -1;
               mid = (min + max)/2;
                
            }else if (num > array[mid]){
               min = mid +1;
               mid = (min + max)/2;
                
            }
            
            
        }
        return -1;
    }
    public static void main(String args[])
    {
        //             0  1  2  3   4   5   6   7   8   9  10  11  12  13/ 14  15/ 16  17  18/ 19  20  21/ 22  23/ 24
        int[] array = {2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97};
        System.out.println(binarySearch(array,3));
       
    }
}
