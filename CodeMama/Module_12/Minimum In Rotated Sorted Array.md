## Problem Statement
Write a program to find the minimum value in a rotated sorted array using binary search algorithm. If a sorted array is like {0,1,2,4,5,6,7} then the rotated sorted array can be {4,5,6,7,0,1,2}.
### Input
The program will take an integer 𝑁N as the size of a rotated sorted array. Then it will take the integer values of the array 𝑀[]M[].
### Output
The output will print the minimum integer number from the array.
### Constraints
- 0 ≤ |N| ≤ 100000
- 0 ≤ |M[]| ≤ 100000
### Example:
Enter numbers
#### Input:
```
7
4 5 6 7 0 1 2
```
#### Output:
```
0
```
### Notes:

There will be no repeated elements.
# Solution:
```php
<?php

    # Write your PHP code from here

    $line1 = fgets(STDIN);

    $line2 = trim(fgets(STDIN));

    $n = (int)$line1;

    $data = explode(" ", $line2);

    $ans = minBinarySearch($data, $n);

    print $ans;

  

    function minBinarySearch($arr, $n){

        $start =0;

        $end = $n -1;

        $lastItem = $arr[$end];

        $mid;

        while($start <= $end){

            $mid = floor(($start + $end) / 2);

            if($arr[$mid] > $lastItem){

                $start = $mid + 1;

            }

            else{

                $end = $mid - 1;

            }

        }

        if($arr[$mid] > $lastItem ) $mid++;

        return $arr[$mid];

    }

  

?>
```
