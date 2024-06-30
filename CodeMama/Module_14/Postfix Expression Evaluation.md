
## Problem Statement
Write a program to evaluate Postfix expression.A postfix expression is an expression where the operator appears after the operands.
### Input
The program will take a string 𝑆S as input.
### Output
The output will print the result after evaluation which will be an integer.
### Constraints

- 0 ≤ |S| ≤ 10000
- Only characters from 0-9 will be used
- - - - / will be there as opertor along with ( ) in input

### Example:

Enter string

#### Input:

```
56*
```

#### Output:

```
30
```

# Solution:
```php
<?php

    # Write your PHP code from here

    $input = trim(fgets(STDIN));

  

    $st = new SplStack();

    for($i=0; $i<strlen($input); $i++){

        $item = $input[$i];

        if(isNumber($item)){

            $st -> push($item);

        }else{

            $first = $st->pop();

            $second = $st ->pop();

            $result = calculator($first, $second, $item);

            $st -> push($result);

        }

    }

  

    print (int)$st ->top();

  

    function calculator($second, $first, $operator){

        switch($operator){

            case '+':

                return $first + $second;

            break;

  

            case '-':

                return $first - $second;

            break;

  

            case '*':

                return $first * $second;

            break;

  

            case '/':

                return $first / $second;

            break;

        }

        return -1;

    }

    function isNumber($item){

        return $item >= "0" && $item <="9";

    }

?>
```