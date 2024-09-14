<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"></a>
</p>

### .env
```sql
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todo_db
DB_USERNAME=root
DB_PASSWORD=
```

### crete Table
```sql
CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
age INT,
city VARCHAR(100)
);

```
### Insert values
```sql
INSERT INTO users (name, email, age, city) VALUES
('Alice Smith', 'alice.smith@example.com', 30, 'New York'),
('Bob Johnson', 'bob.johnson@example.com', 25, 'Los Angeles'),
('Carol Williams', 'carol.williams@example.com', 35, 'Chicago'),
('David Brown', 'david.brown@example.com', 28, 'Houston'),
('Eve Davis', 'eve.davis@example.com', 22, 'Phoenix'),
('Frank Miller', 'frank.miller@example.com', 40, 'Philadelphia'),
('Grace Wilson', 'grace.wilson@example.com', 33, 'San Antonio'),
('Hank Moore', 'hank.moore@example.com', 27, 'San Diego'),
('Ivy Taylor', 'ivy.taylor@example.com', 29, 'Dallas'),
('Jack Anderson', 'jack.anderson@example.com', 31, 'San Jose');

```
