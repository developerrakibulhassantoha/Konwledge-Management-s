
```js
class BankAccount{

    constructor(accountNumber, ownerName, balance){

        this.accountNumber = accountNumber;

        this.ownerName = ownerName;

        this.balance = balance;

    }

    deposit(amount){

        this.balance += amount;

    }

    withdraw(amount){

        this.balance -= amount;

    }

    getbalance(){

       return this.balance;

    }

    displayAccountInfo(){

        console.log(`Account Number: ${this.accountNumber}`);

        console.log(`Onwer Name: ${this.ownerName}`);

        console.log(`Balance: $${this.balance}`);

    }

}

  

const account1 = new BankAccount('RH-1001', 'Rakibul Hassan', 1500);

account1.deposit(1500);

account1.withdraw(500);

account1.displayAccountInfo();

  
  

const account2 = new BankAccount('SI-1002', 'Sharmin Islam Anika', 2500);

account2.deposit(1500);

account2.withdraw(3000);

account2.displayAccountInfo();
```
