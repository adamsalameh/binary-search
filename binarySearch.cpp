//g++  5.4.0

#include <iostream>
using namespace std;

int binarySearch(int array[], int num , int right){
        int left = 0;
        
        while(left <= right){
            
            int middle = (left + right)/2;
            if (num == array[middle]){
                 return middle;                
                
            }else if (num < array[middle]){
               right = middle -1;               
                
            }else if (num > array[middle]){
               left = middle +1;               
                
            }           
            
        }
        return -1;
    }
int main()
{
        //             0  1  2  3   4   5   6   7   8   9  10  11  12  13/ 14  15/ 16  17  18/ 19  20  21/ 22  23/ 24
        int array[] = {2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97};
        
        int right = (sizeof(array)/ sizeof(array[0]))-1;
        cout << binarySearch(array,97, right);
        //cout<< sizeof(array)/ sizeof(array[0]);
}
