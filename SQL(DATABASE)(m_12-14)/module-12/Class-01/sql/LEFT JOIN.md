# The LEFT JOIN command returns all rows from left table and the matching rows from the right table. The result is NULL from the right side, if there is no match.
# Syntax:
1. SELECT column_name(s) FROM table1 LEFT JOIN table2 ON table1.column_name = table2. column_name;
2. SELECT employee.id, employee.name, salary.salary FROM table1 LEFT JOIN table2 ON table1.column_name = table2. column_name;
3. SELECT Customers.CustomerName, Orders.OrderID  FROM Customers LEFT JOIN Orders ON Customers.CustomerID = Orders.CustomerID ORDER BY Customers.CustomerName;


# **Note:** The `LEFT JOIN` keyword returns all records from the left table (Customers), even if there are no matches in the right table (Orders).
