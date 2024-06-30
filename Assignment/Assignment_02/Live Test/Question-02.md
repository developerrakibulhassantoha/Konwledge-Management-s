
#### Create a class called 'Person' with the following attributes and methods: Attributes: name age Methods: - __construct(name, age): Initialize the 'name' and 'age' attributes with the given values. - introduce(): Print a message introducing the person with their name and age. Template: (This is a template, so implement the things as directed above.)
```php
<?php class Person { 
// attributes 
// constructor public function __construct($name, $age) { 
} 
// method public function introduce() { 
} 
} 
// Example: 
$person = new Person("John", 30); 
$person->introduce(); 

?> 
```
Expected Output: My name is John and I am 30 years old.








# Ans:
```php
<?php

class Person{

    private $name;

    private $age;

    public function __construct($name, $age)

    {

        $this->name=$name;

        $this->age=$age;

    }

    public function introduce(){

        echo "My name is {$this->name} and I am {$this->age} years old.";

    }

}

$personObj = new Person("Jhon", 30);

$personObj->introduce();
```


