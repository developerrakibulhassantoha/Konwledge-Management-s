# *Tools:*
1. **MySQL Installation XAMM**
2. **localhost/phpmyadmin**
3. **VS Code Database Extension**
# Basic Query Writing:
1. what is Database?
2. What is table? and how to table create?
3. What is Row / Column
4. Query From GUI(**Graphical User Interface**) 
   => Insert, Delete, Edit , Select.
5. Query From SQL(**Structured Query Language**.)
    => Insert , Delete, Edit , Select.
```q
    SELECT * FROM students
    
    INSERT INTO students (`name`, `roll`, `city`) VALUES ("Sharmin", "09", "Dhaka")
    
    DELETE FROM students WHERE `id`=5
    
    UPDATE students SET `name`="Anikha" WHERE `id`=09
    
```


# *** Database Relationship Sign 

# *** Database ERD Understanding 

# *** POS Database Design & Construction & ERD(SQL Developer,DBForge)

# *** Structured, Un-Structured, Semi-Structured

# *** Data Modeling --> 1. Normalization, Embeded 

# *** Join Query 



SELECT b.firstName,b.lastName,b.mobile,g.name ----->  চাহিদা 

users b  -----> -----> -----> -----> -----> ----->  b মানে কি 
LEFT JOIN -----> -----> -----> -----> -----> -----> কিভাবে পাশে বসাবো 
categories g  -----> -----> -----> -----> ----->  g মানে কি 

ON b.id=g.user_id -----> -----> -----> -----> -----> বিয়ে হবে কি সম্পর্কে পমান দ্বাও 





# Table Create Code:
# 1.users 

```sql
CREATE TABLE `users` (

  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,

  `firstName` varchar(50) NOT NULL,

  `lastName` varchar(50) NOT NULL,

  `email` varchar(50) NOT NULL,

  `mobile` varchar(50) NOT NULL,

  `password` varchar(50) NOT NULL,

  `otp` varchar(10) NOT NULL DEFAULT '0',

  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),

  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()

)
```

# 2.categories
```sql
CREATE TABLE `categories` (

  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,

  `name` varchar(50) NOT NULL,

  `user_id` bigint(20) UNSIGNED NOT NULL,

  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),

  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),

   FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE

);
```

# 3.Customers
```sql
CREATE TABLE `customers` (

  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,

  `name` varchar(50) NOT NULL,

  `email` varchar(50) NOT NULL,

  `mobile` varchar(50) NOT NULL,

  `user_id` bigint(20) UNSIGNED NOT NULL,

  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),

  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),

   FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE

)
```

# 4.Products
```sql
CREATE TABLE `products` (

  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,

  `user_id` bigint(20) UNSIGNED NOT NULL,

  `category_id` bigint(20) UNSIGNED NOT NULL,

  `name` varchar(100) NOT NULL,

  `price` varchar(50) NOT NULL,

  `unit` varchar(50) NOT NULL,

  `img_url` varchar(100) NOT NULL,

  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),

  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),

   FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE,

   FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE

)****
```

# 5.Invoices
```sql
CREATE TABLE `invoices` (

  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,

  `total` varchar(50) NOT NULL,

  `discount` varchar(50) NOT NULL,

  `vat` varchar(50) NOT NULL,

  `payable` varchar(50) NOT NULL,

  `user_id` bigint(20) UNSIGNED NOT NULL,

  `customer_id` bigint(20) UNSIGNED NOT NULL,

  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),

  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),

   FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE,

   FOREIGN KEY (`customer_id`) REFERENCES `customers`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE

)
```

# 6.Invoice Products
```sql
CREATE TABLE `invoice_products` (

  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,

  `invoice_id` bigint(20) UNSIGNED NOT NULL,

  `product_id` bigint(20) UNSIGNED NOT NULL,

  `user_id` bigint(20) UNSIGNED NOT NULL,

  `qty` varchar(50) NOT NULL,

  `sale_price` varchar(50) NOT NULL,

  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),

  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),

   FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE,

   FOREIGN KEY (`product_id`) REFERENCES `products`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE,

   FOREIGN KEY (`invoice_id`) REFERENCES `invoices`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE

)
```
