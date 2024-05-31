# The `RIGHT JOIN` keyword returns all records from the right table (table2), and the matching records (if any) from the left table (table1).
# The RIGHT JOIN command returns all the rows from right table and the matching rows from left table. The result is NULL from the left side if there is no match.




#  Syntax:
1. SELECT _column_name(s)_  FROM _table1_  RIGHT JOIN table2 ON table1.column_name =table2.column_name;
2. SELECT Orders.OrderID, Employees.LastName, Employees.FirstName  FROM Orders  RIGHT JOIN Employees ON Orders.EmployeeID = Employees.EmployeeID  ORDER BY Orders.OrderID;
3.  SELECT employee.id, employee.name, salary.salary FROM table2 RIGHT JOIN table1 ON table2.id = table1.id;

# **Note:** The `RIGHT JOIN` keyword returns all records from the right table (Employees), even if there are no matches in the left table (Orders).

