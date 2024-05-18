# Class constructor is a magic method

## 🟪 Constructor execute automatically when object is created

## 🟪 Constructor can take parameter

## 🟪 Constructor method can't return any result


# 🟪 Class Constructor
1. Auto Fire
2. Con`t Return
```js
class Person{

    constructor() {

        console.log("I am constructor")

    }

    first_name="Rabbil";

    last_name="Hasan";

    getName(){

        return ('My full name is '+this.first_name+" "+this.last_name)

    }

}

let personObj=new Person();

```


# 🟪 Constructor Parameter
1. Auto Fire
2. Con`t Return
3. Params/parameter passing
```js
class Person{
    constructor(a,b) {
        console.log(a+b)
    }

    first_name="Rabbil";

    last_name="Hasan";

    getName(){

        return ('My full name is '+this.first_name+" "+this.last_name)

    }

} 

let personObj=new Person(20,30);


```



# 🟪 Change class properties value using constructor