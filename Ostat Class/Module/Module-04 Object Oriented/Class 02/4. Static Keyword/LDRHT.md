# 🟪 The " #static" keyword in JavaScript is used to define static methods and properties for a class

# 🟪 Static members (properties and methods) are called without instantiating their class and cannot be called through a class instance

# **Why we use `static`**

## 🟪Shared Properties

## 🟪Utility Functions

## 🟪Memory Efficiency

## 🟪Performance
```js

class Person{

    first_name="Rabbil";

    last_name="Hasan";

    age="34";

    static city="Dhaka";

    getName(){

        return ('My full name is '+this.first_name+" "+this.last_name)

    }

}

console.log(Person.city)


```

