
## Problem Statement

Write a program to Create a function that takes a string, removes all "special" characters (e.g. ., !, @, #, $, %, ^, &, , *, (, )) and returns the new string.

### Input

The program will take a string 𝑆S

### Output

The output will print a string without any special character.

### Constraints

- 0 ≤ |S| ≤ 1000
- Input special characters will be from (., !, @, #, $, %, ^, &, , *, (, ))

### Example:

Enter string

#### Input:

```
ab!cd
```

#### Output:

```
abcd 
```

# Solution:
```php
<?php

    # Write your PHP code from here

    fscanf(STDIN, "%s", $str);

    for($i=0; $i<strlen($str); $i++){

        $item = $str[$i];

        if(isSpecial($item)){

            $str = substr_replace($str, '', $i, 1);

        }

    }

    print $str;

  

    function isSpecial($c){

        if($c == "." || $c == "!" || $c == "@" || $c == "#" || $c == "$" || $c == "%" || $c == "^" || $c == "&" || $c == "*" || $c == "(" || $c == ")" || $c == "/"){

            return true;

        }else{

            return false;

        }

    }

?>
```