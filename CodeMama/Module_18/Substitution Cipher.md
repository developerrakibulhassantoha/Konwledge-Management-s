
## Problem Statement

A substitution cipher is a method of encryption where each letter in the plaintext is replaced by another letter according to a fixed system. One of the simplest substitution ciphers is the Caesar cipher, where each letter in the plaintext is shifted a certain number of places down or up the alphabet. You will be given a plaintext and a shift number. You will have to have to shift each letter of the plaintext according to the number.

### Input

The program will take a string 𝑆S and an integer 𝑁N

### Output

The output will print a string shifted by a particular number.

### Constraints

- 0 ≤ |N| ≤ 10000
- 0 ≤ |S| ≤ 10000

### Example:

Enter string and number

#### Input:

```
abcd 1
```

#### Output:

```
bcde
```

# Solution:
```php
<?php

    # Write your PHP code from here

    fscanf(STDIN, "%s %d", $str, $n);

    for($i=0; $i<strlen($str); $i++){

        $item = $str[$i];

        print chr(ord($item)+ $n);

    }

?>
```