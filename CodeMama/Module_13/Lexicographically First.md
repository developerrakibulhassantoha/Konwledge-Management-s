
## Problem Statement
Write a program to create a function that returns the lexicographically first rearrangements of a lowercase string.
### Input
The program will take a string 𝑆S as input.
### Output
The output will print a string.
### Constraints
- 0 ≤ |S| ≤ 100000
### Example:
Enter string
#### Input:

```
hello
```
#### Output:
```
ehllo
```
# Solution:
```php
<?php

    # Write your PHP code from here

    fscanf(STDIN, "%s", $str);

    $data = str_split($str);

    sort($data);

    print implode("", $data);

  

?>
```
