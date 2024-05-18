##### মডিউল ১০ এর অ্যাসাইনমেন্ট

# **Submission Guidelines:**

1) You have to create two files called string.php and oop.php in the root of your github repository.  
2) Use the stated variables and templates where it is given. Do not add or modify or rename given elements.  
3) Your output must look like the given output that is given below of each question.
4) 4)You must have to create a fresh new Github Repository.

# **1.Problem Statement: Marks 40**

Write a PHP program that takes an array of strings as input. Your program should iterate over each string in the array and perform the following operations:

1. Count the number of vowels (a, e, i, o, u) in each string.  
    2. Reverse each string.  
    3. Print the original string and the modified strings along with their vowel counts.

**You must use this array of strings:**  
$strings = ["Hello", "World", "PHP", "Programming"];

**Your Output must look like this:**  
Original String: Hello, Vowel Count: 2, Reversed String: olleH  
Original String: World, Vowel Count: 1, Reversed String: dlroW  
Original String: PHP, Vowel Count: 0, Reversed String: PHP  
Original String: Programming, Vowel Count: 3, Reversed String: gnimmargorP

Submit:
```php
<?php
$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($str) {

    $str = strtolower($str);

    preg_match_all('/[aeiou]/', $str, $matches);

    return count($matches[0]);
}

function reverseString($str) {

    return strrev($str);
}

foreach ($strings as $string) {

    $vowelCount = countVowels($string);

    $reverseStrings = reverseString($string);

    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String:$reverseStrings <br>";

}

```