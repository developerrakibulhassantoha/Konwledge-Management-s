# Data Grouping using SQL:
## Query:
```sql
select * from account;

select * from account where account like 'e%';

SELECT COUNT(*), CITY FROM customer GROUP BY CITY;

SELECT COUNT(*) AS Total_Customer, CITY, STATE, POSTAL_CODE FROM customer GROUP BY CITY;

SELECT COUNT(*) AS Total_Customer, CITY, STATE, POSTAL_CODE FROM customer GROUP BY POSTAL_CODE;

SELECT COUNT(*) AS Total_Customer, CITY, STATE, POSTAL_CODE FROM customer GROUP BY CITY, POSTAL_CODE;

```



# Multiple Where Clause in SQL:
# Query:
```sql
SELECT * FROM customer WHERE CITY = 'Salem';

SELECT * FROM customer WHERE CITY IN ('Salem','Wilmington');

SELECT * FROM customer WHERE CITY = 'Salem' AND POSTAL_CODE ='03079';

SELECT * FROM customer WHERE CITY IN ('Salem','Wilmington') AND POSTAL_CODE IN ('03079', '01887');

SELECT * FROM customer WHERE (CITY = 'Salem' AND POSTAL_CODE IN ('03079', '02451')) OR (CITY='Wilmington' AND POSTAL_CODE='03070');

SELECT * FROM customer WHERE CITY IN ('Salem','Wilmington') AND POSTAL_CODE IN ('03079', '01887');
```



# Data from multiple tables according to different conditions:
# Query:
```sql

SELECT customer.CUST_ID, individual.FIRST_NAME, individual.LAST_NAME, customer.CITY, customer.POSTAL_CODE FROM customer, individual WHERE customer.CUST_ID = individual.CUST_ID;


```


# Data Fetching using inner join in multiple tables:
# Query:
```sql

SELECT customer.CUST_ID, individual.FIRST_NAME, individual.LAST_NAME, individual.BIRTH_DATE, customer.CITY, customer.POSTAL_CODE FROM customer JOIN individual ON customer.CUST_ID = individual.CUST_ID WHERE CITY = 'Salem';

SELECT customer.CUST_ID, individual.FIRST_NAME, individual.LAST_NAME, individual.BIRTH_DATE, customer.CITY, customer.POSTAL_CODE FROM customer JOIN individual ON customer.CUST_ID = individual.CUST_ID WHERE CITY IN ('Salem', 'Waltham');

SELECT customer.CUST_ID, individual.FIRST_NAME, individual.LAST_NAME, individual.BIRTH_DATE, customer.CITY, customer.POSTAL_CODE FROM customer JOIN individual ON customer.CUST_ID = individual.CUST_ID WHERE CITY IN ('Salem', 'Waltham') AND POSTAL_CODE ='03079';
```

# Join all data from two tables together:
# Query:
```sql
// old style
SELECT customer.CUST_ID, individual.FIRST_NAME, individual.LAST_NAME, customer.CITY, customer.STATE FROM customer, individual WHERE customer.CUST_ID =individual.CUST_ID;

// update style
SELECT customer.CUST_ID, individual.FIRST_NAME, individual.LAST_NAME, customer.CITY, customer.STATE FROM customer JOIN individual ON customer.CUST_ID =individual.CUST_ID;
```



# Aggregator function (sum) with GROUP BY clause on table:
# Query:
```sql

SELECT SUM(AVAIL_BALANCE), CUST_ID, OPEN_BRANCH_ID FROM account GROUP BY CUST_ID, OPEN_BRANCH_ID;

```


# Aggregator function and grouping in SQL:
# Query:
```sql
SELECT CUST_ID, OPEN_BRANCH_ID, SUM(AVAIL_BALANCE) AS Total_Balance FROM account GROUP BY CUST_ID, OPEN_BRANCH_ID;
```


# Data filtering between aggregator functions:
# Query:
```sql

SELECT CUST_ID, SUM(AVAIL_BALANCE) AS Total FROM account GROUP BY CUST_ID HAVING Total > 5000;

```


# Sub select in SQL:
# Query:-
```sql
SELECT CUST_ID, Total FROM (SELECT CUST_ID, SUM(AVAIL_BALANCE) AS Total FROM account GROUP BY CUST_ID) AS balance WHERE Total >1000;
```

# Aggregator function and join together in SQL:
# Query:-
```sql
SELECT account.CUST_ID, SUM(AVAIL_BALANCE) AS Total, individual.FIRST_NAME, individual.LAST_NAME, individual.BIRTH_DATE FROM account, individual WHERE individual.CUST_ID =account.CUST_ID GROUP BY CUST_ID HAVING Total >5000;
```

# Aggregator function and joining of more than two tables together:
# Query:
```sql
SELECT account.CUST_ID, SUM(AVAIL_BALANCE) AS Total, individual.FIRST_NAME, individual.LAST_NAME, account.OPEN_BRANCH_ID FROM account JOIN individual ON account.CUST_ID = individual.CUST_ID GROUP BY account.CUST_ID HAVING Total > 5000;
```



# Different types of joining and inner joining in SQL:
# Query:
```sql
SELECT account.CUST_ID, individual.FIRST_NAME, individual.LAST_NAME, account.OPEN_BRANCH_ID FROM account JOIN individual ON account.CUST_ID = individual.CUST_ID;
```


# Select:
```sql
SELECT * FROM `customer`

SELECT ADDRESS, CITY FROM customer;

SELECT count(*) FROM `customer
```

# Insert:
```sql
INSERT INTO customer (ADDRESS, CITY) VALUES ('Chakaria', 'Coxs Bazar');

```
# Update:
```sql
UPDATE customer SET ADDRESS = 'Coxs Bazar' where CUST_ID = 2;
or
UPDATE customer SET ADDRESS ='coxs bazar' WHERE ADDRESS = '18 Jessup Rd';
```


# Delete:
```sql
DELETE FROM branch WHERE BRANCH_ID = 5;
```

# Inner Join:
```sql
SELECT account.CUST_ID, individual.FIRST_NAME, individual.LAST_NAME FROM account JOIN individual ON account.CUST_ID = individual.CUST_ID;
```

# Left Join:
```sql
SELECT account.CUST_ID, individual.FIRST_NAME, individual.LAST_NAME FROM account LEFT JOIN individual ON account.CUST_ID = individual.CUST_ID;
```

# Right Join:
```sql
SELECT account.CUST_ID, individual.FIRST_NAME, individual.LAST_NAME FROM account RIGHT JOIN individual ON account.CUST_ID = individual.CUST_ID;
```
