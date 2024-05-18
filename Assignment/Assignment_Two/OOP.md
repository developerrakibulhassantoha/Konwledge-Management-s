# **2. Problem Statement: Marks: 60**

You are required to create a simple Library System in PHP using Object-Oriented Programming (OOP) principles. The system should have the following functionalities:

1) Create a Book class with private properties for title and availableCopies.  
2) Create a Member class with a private property for name.  
3) Implement methods in the Book class to borrow and return books. This borrowBook method should decrease the available copies and returnBook method should increase the available copies.  
4) Implement methods in the Member class to borrow and return books. Here the borrowBook method should take book as an argument and returnBook method should also take book as an argument.  
5) Write a PHP program to demonstrate the usage of the library system, including adding books to the library, adding members, borrowing books, returning books, and displaying the available books.  
6) You have to create  2 books and 2 members. Member One has to borrow  book 1 and Member Two has to borrow  book 2.  
7) For your reference we have provided a template.

# **You must have to use this template:** 

**<?php**  
class Book {  
 // TODO: Add properties as Private  
   
 public function __construct($title, $availableCopies) {  
     // TODO: Initialize properties  
     }

// TODO: Add getTitle method

  
 // TODO: Add getAvailableCopies method  
 

  
 // TODO: Add borrowBook method  
 

  
 // TODO: Add returnBook method  
   
}

class Member {  
 // TODO: Add properties as Private

  
 public function __construct($name) {  
      // TODO: Initialize properties  
     }

  
 // TODO: Add getName method  
   
 // TODO: Add borrowBook method  
 

  
 // TODO: Add returnBook method  
   
}

  
// Usage

// You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.

// TODO: Create 2 books with the following properties  
Book 1 - Name: The Great Gatsby, Available Copies: 5.  
Book 2 - Name: To Kill a Mockingbird, Available Copies: 3.

  
// TODO: Create 2 members with the following properties  
Member 1 - Name: John Doe  
Member 2 - Name: Jane Smith

  
// TODO: Apply Borrow book method to each member

  
// TODO: Print Available Copies with their names:

**?>**

**Output must look like this:**  
Available Copies of 'The Great Gatsby': 4  
Available Copies of 'To Kill a Mockingbird': 2

# Submit:
```php
<?php
class Book{

    private $title;

    private $availableCopies;

    public function __construct($title, $availableCopies)

    {

        $this->title=$title;

        $this->availableCopies=$availableCopies;

    }

    public function getTitle(){

        return $this->title;

    }

    public function getAvailableCopies(){

        return $this->availableCopies;

    }

    public function borrowBook(){

        if($this->availableCopies>0){

            $this->availableCopies--;

            return true;

        }

        else{

            return false;

        }

    }

    public function returnBook(){

        return $this->availableCopies ++;

    }

}

class Member{

    private $name;

    public function __construct($name)

    {

        $this->name=$name;

    }

    public function getName(){

        return $this->name;

    }

    public function borrowBook($book){

       return $book->borrowBook();

    }

    public function returnBook($book){

        return $book->returnBook();

    }

}

$book1 = new Book("The Great Gatsby",5);

$book2 = new Book("To Kill a Mockingbird",13);

  

$member1 = new Member("Rakibul Hassan Babo");

$member2 = new Member("Sharmin Akther Anikha");


$member1->borrowBook($book1);

$member1->borrowBook($book1);

$member2->borrowBook($book2);


$member1->returnBook($book1);

$member2->returnBook($book2);


echo "Available Copies of '".$book1->getTitle(). '\' : '.$book1->getAvailableCopies()."<br/>";

echo "Available Copies of '".$book2->getTitle(). '\' : '.$book2->getAvailableCopies()."<br/>";

  

?>
```
