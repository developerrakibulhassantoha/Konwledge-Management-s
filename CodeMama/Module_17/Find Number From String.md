
## Problem Statement

Write a program to find a number from a string. An input string will contain english letters along with a number.There will be only one number in the string.You will have to find that number and print it.

### Input

The program will take a string 𝑆S

### Output

The output will print a number.

### Constraints

- 0 ≤ |N| ≤ 10000

### Example:

Enter string

#### Input:

```
ab1cd
```

#### Output:

```
1
```

# Solution:
```php
<?php

    # Write your PHP code from here

    fscanf(STDIN, "%s", $str);

    for($i =0 ; $i < strlen($str); $i++){

        if( (ord($str[$i]) >=ord('0')) && (ord($str[$i]) <ord('9'))){

            print $str[$i];

            break;

        }

    }

?>
```