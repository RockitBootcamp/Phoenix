# Connect to MySql

Connect to mysql from terminal

```
// Verify installed
$ mysql --version
```

```
// Login
$ mysql -u root
```

```
// Show databases
mysql>show databases;

// Make database;
mysql>create database myDatabase;

// Use Database
mysql>use myDatabase;
```

```
// Show tables
mysql>show tables;

// Create table
mysql>create table dolphin (
    id int, 
    type varchar(255),
    name varchar(255)
);
```

```
// Add some data
mysql>insert into dolphin
    (id, type, name)
    values
    (1, "bottlenose", "flipper"); 

    insert into dolphin
    (id, type, name)
    values
    (2, "bottlenose", "flipper");

    insert into dolphin
    (id, type, name)
    values
    (2, "bottlenose", "asdfasd");
// Let's see everything now, shall we?
mysql>select * from dolphin;

// Update dolphin
mysql>update dolphin 
    set name="Jack"
    where id=1;

// Delete a record
mysql>delete from dolphin
    where id=1;

```
