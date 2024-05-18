# Overriding:

## 🟪 Overriding works for inheritance relationship

## 🟪 When child class change his parent properties , that is overriding


```js
class Father{

    addNumber(){

        let a=10;

        let b=20;

        let c=30;

        console.log(a+b+c);

    }
}

class Son extends Father{

    addNumber(){

        let a=10;

        let b=20;

        console.log(a+b);

    }

}

let SonObj=new Son();

SonObj.addNumber();
```
