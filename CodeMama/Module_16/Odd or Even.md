
## Problem Statement
Write a program which will determine whether the sum of all the digits of the number is even or odd.
### Input
The program will take an integer 𝑁N as input.
### Output

The output will print either "Odd" or "Even"
### Constraints
- 0 ≤ |N| ≤ 100000

### Example:
Enter number
#### Input:

```
123
```

#### Output:

```
Even
```

### Notes:

# Solution:
```php
<?php
    # Write your PHP code from here
    fscanf(STDIN, "%s", $line);

    $sum=0;

    for($i=0; $i<strlen($line); $i++){

        $sum +=(int)$line[$i];

    }

    if($sum % 2 == 0)    print "Even";

    else                 print "Odd";

?>
```