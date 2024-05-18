# 01.
# Greetings
## Problem Statement
Write a program that asks the user for their name and then prints a personalized greeting.
### Input

The input consists of a string 𝑆S
### Output
Output a single line containing the personalized greeting.
### Constraints
- 1 ≤ S ≤ 1000
### Example:
What is your name?
#### Input:
```
Alice
```
#### Output:
```
Hello, Alice! Nice to meet you.
```
### Notes:
In the example, the user's name is "Alice". The program prints a greeting message, combining the user's name with the predefined message.


# Solve
```php
<?php

    # Write your PHP code from here

      fscanf(STDIN, "%s", $name);

    print("Hello, ".$name."! Nice to meet you.");

?>
```

# 02.

Simple Summation
## Problem Statement
Write a program that calculates and prints the sum of two numbers entered by the user.
### Input
The input consists of two integers.
### Output
Output a single line containing the sum of two integers.
### Constraints
- -2 31 ≤ |S| ≤ 231 - 1
### Example:
Enter two numbers
#### Input:
```
5 2
```
#### Output:
```
7
```

# Solve:
```php
<?php

    # Write your PHP code from here
    fscanf(STDIN, "%s %s", $a, $b);
    print $a+$b; 


    $line =trim(fgets(STDIN));

    $data = explode(" ", $line);

    $a =$data[0];

    $b =$data[1];

    print $a+$b;

?>
```

# 03.

Even or Odd?
## Problem Statement
Write a program that checks if a number entered by the user is even or odd.
### Input
The input consists of a integer.
### Output
Output a single line explaining whether it is even or odd.
### Constraints
- -2 31 ≤ |S| ≤ 231 - 1
### Example-1:
Enter a number
#### Input:
```
7
```
#### Output:
```
7 is an odd number.
```
### Example-2:
Enter a number
#### Input:

```
8
```
#### Output:

```
8 is an even number.
```
# Solve:
```php
<?php

    # Write your PHP code from here

    fscanf(STDIN, "%d", $num);

    if($num % 2 == 0){

        print $num." is an even number.";

    }else{

        print $num." is an odd number.";

    }

?>
```

# 04.

# Counting Characters:

## Problem Statement
Write a program that counts the number of characters in a string entered by the user.
### Input
The input is a string.
### Output
Output the number of characters.
### Constraints

- Output will be an unsigned integer.
### Example:
Enter a string
#### Input:
```
Alice
```
#### Output:

```
5
```

# Solve:
```php
<?php

    # Write your PHP code from here

    fscanf(STDIN, "%s", $str);

    print strlen($str);

?>
```
