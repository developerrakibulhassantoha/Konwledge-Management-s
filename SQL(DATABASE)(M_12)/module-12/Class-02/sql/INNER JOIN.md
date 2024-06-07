# INNER JOIN:
## The ==INNER JOIN== keyword ==SELECT==  records that have ==matching== values in ==both tables==.

# Syntax:
1. SELECT _column_name(s)_  FROM _table1_  INNER JOIN table2  ON _table1.column_name_ = _table2.column_name_;
2. SELECT Orders.OrderID, Customers.CustomerName  FROM Orders INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID;
3. SELECT colum.name(s) FROM  table1 INNER JOIN table2 ON table1.colum.name=table2.colum.name

**Note:** The `INNER JOIN` keyword selects all rows from both tables as long as there is a match between the columns. If there are records in the "Orders" table that do not have matches in "Customers", these orders will not be shown!

## JOIN Three Tables:
SELECT Orders.OrderID, Customers.CustomerName, Shippers.ShipperName  FROM ((Orders  INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID)  
INNER JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID);