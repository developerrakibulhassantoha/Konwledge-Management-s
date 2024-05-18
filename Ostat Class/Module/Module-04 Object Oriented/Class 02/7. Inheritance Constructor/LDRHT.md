# Inheritance Constructor:
## 🟪 Constructor inside only parent class

## 🟪 Constructor inside only parent class pass parameters

```js
class Father{

    constructor(a,b) {

        console.log("I am Father Constructor="+(a+b))

    }

}

class Son extends Father{

}

//let FatherObj=new Father(20,40);
let SonObj=new Son(20,40);

```


## 🟪 Constructor inside only child class

## 🟪 Constructor inside only child class pass parameters

```js
class Father{

}

class Son extends Father{

    constructor(a,b) {

        super()

        console.log("I am Son Constructor="+(a+b))

    }

}

let SonObj=new Son(20,40);
```


## 🟪 Constructor inside both parent & child class

## 🟪 Constructor inside both parent & child class pass parameters


```js
class Father{

      constructor(a,b) {

        console.log("I am Father Constructor="+(a+b))

    }

}
class Son extends Father{

      constructor(a,b) {

        super()

        console.log("I am Son Constructor="+(a+b))

    }

}
let SonObj=new Son(20,40);
let FatherObj=new Father(20,40);

```
