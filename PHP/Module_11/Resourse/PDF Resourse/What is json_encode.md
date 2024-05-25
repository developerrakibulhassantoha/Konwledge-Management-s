```php
<?php
header('Content-Type: application/json'); 
// Lets Create JSON Object From PHP Asoc Array 
$AsocArray=[ "name"=>"Jhon", "age"=>30]; 
$JSON=json_encode($AsocArray); 
echo $JSON; 
// Lets Create JSON Array From PHP Multidimensional Asoc Array 
$AsocArray=[ [ "name"=>"Jhon", "age"=>30], [ "name"=>"Mark", "age"=>33] ]; $JSON=json_encode($AsocArray); 
echo $JSON;
```
# Question: What is file_get_contents()? 
# Answers: PHP function used primarily to read a file into a string Question: 
# What is $_SERVER["REQUEST_METHOD"] 
# Answare: PHP superglobal array element that returns the request method used to access the page. 
# Question: What is json_decode() 
# Answers: PHP function that takes a JSON encoded string and converts it into a PHP variable

```php
<?php
header('Content-Type: application/json'); 
// Lets Work With POST Method & JSON Decode 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
$StringData = file_get_contents("php://input"); 
$PHPAsocArray = json_decode($StringData, true); 
print_r($PHPAsocArray); 
} 
// Lets Work With POST Method & JSON Encode 
if ($_SERVER["REQUEST_METHOD"] == "GET") {
#php $StringData = file_get_contents("php://input"); 
$PHPAsocArray = json_decode($StringData, true); 
$JSON=json_encode($PHPAsocArray); 
echo $JSON; 
}
```