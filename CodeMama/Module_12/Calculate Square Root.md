
## Problem Statement
Write a program to approximate the square root of a non-negative integer using binary search. Your function should return an integer representing the floor of the square root. For example, for 6 it will print 2.
### Input
The input consists of an integers 𝑁N.
### Output
The output will print the square root integer value of the input.
### Constraints
- 0 ≤ |N| ≤ 10000
### Example:
Enter number
#### Input:
```
6
```
#### Output:
```
2
```

```php
<?php

    # Write your PHP code from here

    fscanf(STDIN, "%d", $n);

    // print (int)sqrt($n);

  

    $start = 0;

    $end = $n;

    $ans;

    while($start <= $end){

        $min = ($start + $end) / 2.0;

        print $start." ".$mid." ".$end."\n";

        if($mid * $mid = $n){

            $ans = $mid;

            break;

        }

        else if($mid * $mid < $n){

            $start = $mid + 1;

            $ans = $mid;

        }

        else{

            $end = $mid -1;

        }

    }

    print floor($ans);

  
  
  

?>
```