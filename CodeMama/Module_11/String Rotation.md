
## Problem Statement:-

Write a program to create a function that checks if one string is a rotation of another. For example, "waterbottle" is a rotation of "erbottlewat" because you can rotate it to get the original string.
### Input
The input consists of two strings 𝑆S and 𝑇T.
### Output
The output will print either "True" or "False".
### Constraints
- 0 ≤ |S| ≤ 10000
- 0 ≤ |T| ≤ 10000
### Example:
Enter strings
#### Input:
```
waterbottle erbottlewat
```

#### Output:
```
True
```

# Solution:-
```php
<?php

    # Write your PHP code from here

    fscanf(STDIN, "%s %s", $a, $b);

     //$isRotation = False;

    for($i=0;$i<strlen($a);$i++){

        $a = substr($a, 1).substr($a, 0, 1);

        //print $a."\n";

        if(strcmp($a, $b )==0){

            print "True";

            break;

        }

    }

    if($i == strlen($a)) print "False";

    // print $isRotation? "True" : "False";

  

    // $isRotation =True;

    // if($isRotation) print "True";

    // else            print "False";

?>
```