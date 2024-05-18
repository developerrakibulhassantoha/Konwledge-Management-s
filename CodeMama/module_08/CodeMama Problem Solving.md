# 1. Second to Hour:Minute
## Problem Statement
Write a program which will take seconds as input and output into hour:minute.
### Input
The input consists of a integer.
### Output
The output will print in the form hour:minute. For example if it takes 130 as input then it will print 0:2.
### Constraints
- 0 ≤ |S| ≤ 10000

### Example:

Enter number
#### Input:
```
130
```
#### Output:
```
0:2
```

```php
<?php

    # Write your PHP code from here

    fscanf(STDIN, "%d", $n);

    $hour = floor($n / 3600);

    $remainingSeconds = $n % 3600;

    $minutes = floor($remainingSeconds/60);

    print $hour. ":".$minutes;

?>
```

# 2.Concatenate Two String
## Problem Statement
Write a program where two strings will be given, firstName and lastName, return a single string in the format "lastName, firstName".
### Input
The input consists of two strings.
### Output
The output will print a string.
### Constraints

- 0 ≤ |S| ≤ 10000
### Example:
Enter strings
#### Input:
```
John Doe
```
#### Output:
```
Doe, John
```
step01
```php
 fscanf(STDIN, "%s %s", $firstName, $lastName);

  print $lastName.", ".$firstName;
```
step02
```php
<?php
    # Write your PHP code from here

    fscanf(STDIN, "%s %s", $firstName, $lastName);

   // print $lastName.", ".$firstName;

    $output = " ";

    for($i=0; $i<strlen($lastName); $i++){

        $output = $output.$lastName[$i];

    }

    $output = ", ";

    for($i=0; $i<strlen($firstName); $i++){

        $output = $output.$firstName[$i];

    }


    print $output;

  

?>
```
