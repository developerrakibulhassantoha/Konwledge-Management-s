## Problem Statement
Write a program to find the index of a target value in a rotated sorted array using binary search algorithm. If a sorted array is like {0,1,2,4,5,6,7} then the rotated sorted array can be {4,5,6,7,0,1,2}.
### Input
The program will take an integer 𝑁N as the size of a rotated sorted array. Then it will take the integer values of the array 𝑀[]M[]. Finally, it will take the target value 𝑃P
### Output
The output will print either the index of the target element or "Element not found" if the element is not found.
### Constraints
- 0 ≤ |N| ≤ 100000
- 0 ≤ |M[]| ≤ 100000
- 0 ≤ |P| ≤ 100000
### Example-1:
Enter numbers
#### Input:
```
7
4 5 6 7 0 1 2
0
```
#### Output:
```
4
```
### Example-2:
Enter numbers
#### Input:
```
7
4 5 6 7 0 1 2
8
```
#### Output:
```
Element not found
```

# SOLUTION:
```PHP
<?php

    # Write your PHP code from here

    $line1 = fgets(STDIN);

    $line2 = trim(fgets(STDIN));

    $line3 = fgets(STDIN);

    $n = (int)$line1;

    $target = (int)$line3;

    $data = explode( " ", $line2);

    $minIndex = minBinarySearch($data, $n);

    $leftAns = binarySearch($data, 0, $minIndex -1, $target);

    $rightAns =binarySearch($data, $minIndex, $n-1, $target);

  

    if($leftAns == -1 && $rightAns ==-1){

        print "Element not found";

    }

    else if($leftAns == -1){

        print $rightAns;

    }

    else{

        print $leftAns;

    }

  

    function binarySearch($arr, $start, $end,  $target){

        $mid;

        while($start <= $end){

            $mid = floor( ($start + $end) /2);

            if($arr[$mid] == $target){

                return $mid;

            }

            else if ( $arr[$mid] < $target){

                $start = $mid + 1;

            }

            else{

                $end = $mid -1;

            }

        }

        return -1;

    }

  
  

    function minBinarySearch($arr, $n){

        $start = 0;

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

        return $mid;

    }

  

?>
```