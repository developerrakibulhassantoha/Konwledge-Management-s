# Problem Statement:
Write a program to create a function that finds and counts all occurrences of a substring within a larger string. For instance, in the string "abababab," the substring "ab" appears four times.
### Input
The input consists of two strings 𝑆S and 𝑇T.
### Output
The output will print the number of occurrences of a substring which will be an integer.
### Constraints
- 0 ≤ |S| ≤ 10000
- 0 ≤ |T| ≤ 10000

### Example:
Enter strings

#### Input:
```
abababab ab
```
#### Output:
```
4
```
# Solution:
```php
<?php

    # Write your PHP code from here

    fscanf(STDIN, "%s %s", $large, $small);

    $count = 0;

    for($i=0; $i<=strlen($large) - strlen($small); $i++){

        $temp = substr($large, $i, strlen($small));

            //print $temp."\n";

            if(strcmp($temp, $small) == 0){

                $count++;

            }

    }

    print $count;
```

