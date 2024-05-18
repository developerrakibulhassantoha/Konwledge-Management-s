
```js
function calculator(){

    var firstNumber=parseFloat(document.getElementById('firstNumber').value);

    var secondNumber=parseFloat(document.getElementById('secondNumber').value);

    var operator=document.getElementById('operators').value;

   var result;

  

    if(operator === 'add'){

         result = firstNumber+secondNumber;

    }

    else if(operator === 'subtraction'){

        result = firstNumber-secondNumber;

    }

    else if(operator === 'multiply'){

        result = firstNumber*secondNumber;

    }

    else if ( operator === 'divide'){

        if(secondNumber != 0){

            result = firstNumber / secondNumber;

        }

        else{

            result ='Cannot divide by zero';

        }

    }

    else{

        result = 'Invalid operator';

    }

    document.getElementById('result2').value = 'Result: ' + result;

}
```
