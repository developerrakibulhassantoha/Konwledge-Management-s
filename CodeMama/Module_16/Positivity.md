
## Problem Statement
Write a program to check if an array contains more positivity than negativity.An array has more positivity if it contains strictly more unique positive values than unique negative values. If the number of positive and negative values are equal then it is also taken as negativity.
### Input
The program will take an integer 𝑁N as the size of an array. Then it will take the integer values of the array 𝑀[]M[].
### Output
The output will print either "Positivity" or "Negativity"
### Constraints
- 0 ≤ |N| ≤ 10000
- -10000 ≤ |M[]| ≤ 10000
### Example:
Enter numbers
#### Input:
```
5
1 -3 6 -2 -8
```
#### Output:
```
Negativity
```
### Notes:

- 0 will be counted as positive
# Solution:
```php
<?php

    # Write your PHP code from here

    $line1 = trim(fgets(STDIN));

    $line2 = trim(fgets(STDIN));

  

    $n = (int)$line1;

    $data = explode(" ", $line2);

  

    $pos = 0;

    for($i=0; $i<$n; $i++){

        if((int)$data[$i]>0){

            $pos++;

        }else{

            $pos--;

        }

    }

    print $pos > 0 ? "Positivity" : "Negativity";

?>
```