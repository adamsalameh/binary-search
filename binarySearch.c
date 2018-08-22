//g++  5.4.0

#include <iostream>


int binarySearch(int array[], int num , int max){
        int min = 0;
       // int max = (sizeof(array)/ sizeof(array[0]))-1;
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
int main()
{
        //             0  1  2  3   4   5   6   7   8   9  10  11  12  13/ 14  15/ 16  17  18/ 19  20  21/ 22  23/ 24
        int array[] = {2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97};
        
        int max = (sizeof(array)/ sizeof(array[0]))-1;
         std::cout << binarySearch(array,2, max);
         //std::cout<< sizeof(array)/ sizeof(array[0]);
}
