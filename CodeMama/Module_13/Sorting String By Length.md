
## Problem Statement
Write a program to create a function that returns an array of strings sorted by length in ascending order.
### Input
The program will take an integer 𝑁N as the length of an array. Then it will take the string values of the array 𝑀[]M[].
### Output

The output will print the strings in sorted order.
### Constraints
- 0 ≤ |N| ≤ 100000
- 0 ≤ |M[]| ≤ 10000
### Example:
Enter number
#### Input:

```
6
abcde abc abcd abcdef ab a
```
#### Output:

```
a ab abc abcd abcde abcdef
```

# Solution:
```php
<?php

    # Write your PHP code from here

    $line1 = trim(fgets(STDIN));

    $line2 = trim(fgets(STDIN));


    $n = (int)$line1;


    $data = explode(" ", $line2);

  
    usort($data, "cmp");

  
    for($i=0; $i<$n; $i++){

        print $data[$i]." ";

    }

    function cmp($a, $b){

        return strlen($a) - strlen($b);

    }

  
  

?>
```
