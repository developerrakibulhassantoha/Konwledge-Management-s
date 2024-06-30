#### You are tasked with creating a PHP program to process an array of random numbers. 
## The program should perform the following tasks: 
#### Filter out the even numbers greater than 50 from the array using the array_filter function. 
#### Then, Multiply each element of the filtered array by 2 using the array_map function.
#### Then Display the resulting array after applying both filtering and mapping operations using print_r() function.

```php
<?php // Given array of random numbers 
$randomNumbers = [208, 54, 376, 162, 440, 64, 390, 482, 67, 209]; 
// Your Code goes here ?>
```

# Ans:
```php
<?php

$randomNumbers = [208, 54, 376, 162, 440, 64, 390, 482, 67, 209];

$filteredArray = array_filter($randomNumbers, function($num) {

    return $num > 50 && $num % 2 == 0;

});

$mappedArray = array_map(function($num) {

    return $num * 2;

}, $filteredArray);

print_r($mappedArray);

```