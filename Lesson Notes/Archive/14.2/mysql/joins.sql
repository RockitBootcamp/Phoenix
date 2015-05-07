# Create a new Database

CREATE DATABASE restaurant;

# Switch to restaurant
use restaurant;

# Check to see if we have anything
show tables;

# Create a new table
CREATE TABLE user (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255),
    lastname VARCHAR(255),
    username VARCHAR(255),
    password VARCHAR(255)
);

CREATE TABLE restaurant (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255)
);

CREATE TABLE menu (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,    
    name VARCHAR(255)
);

CREATE TABLE menuItem (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    menuId INT NOT NULL,
    ingredientId INT NOT NULL,
    name VARCHAR(255),
    price VARCHAR(255),
    calories VARCHAR(255)
);

CREATE TABLE ingredient (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255)
);

insert into menu (name) Values ("jimmies pizza truck";
insert into menu (name) Values ("el macho tacos");
insert into menu (name) Values ("hamburger helper");
insert into menu (name) Values ("chicken and waffles");


insert into ingredient (name) Values ("potatoes");
insert into ingredient (name) Values ("cheese");
insert into ingredient (name) Values ("avacado");
insert into ingredient (name) Values ("flour");
insert into ingredient (name) Values ("tomato");
insert into ingredient (name) Values ("beef");
insert into ingredient (name) Values ("tortilla");
insert into ingredient (name) Values ("bacon");


insert into menuItem (menuId, ingredientId, name, price, calories) Values (1, 1, "pizza", "9.00", "960");

insert into menuItem (menuId, ingredientId, name, price, calories) Values (1, 2, "pizza cheese", "9.00", "960");

# Create Many to Many Table
CREATE TABLE menuItemIngredient (
    menuItemId INT NOT NULL,
    ingredientId INT NOT NULL
);


# Create our Potato Pizza
insert into menuItemIngredient (menuItemId, ingredientId) Values (1, 1);
insert into menuItemIngredient (menuItemId, ingredientId) Values (1, 2);


# (MenuItem Name) (Ingredient Name)
Potato Pizza - Cheese
Potato Pizza - Potato

# Join two tables
select 
    menuItem.name, 
    ingredient.name 
from 
    menuItem, 
    ingredient
Where 
    menuItem.ingredientId = ingredient.id;


# Select column as different name
select menuItem.name as "Item Name", ingredient.name as "Ingredient" from menuItem, ingredient Where menuItem.ingredientId = ingredient.id;

# Select the same column with different name
select menuItem.name as "Item Name", menuItem.name as "Item Abba", ingredient.name as "Ingredient" from menuItem, ingredient Where menuItem.ingredientId = ingredient.id;

# use table alias
select mi.name as "Item Name", i.name as "Ingredient" from menuItem mi, ingredient i Where mi.ingredientId = i.id;


# Use join statement

select 
    menuItem.name, 
    ingredient.name 
from 
    menuItem,
    ingredient 
Where 
    menuItem.ingredientId is  null or 
   ingredient.id is null


select 
    menuItem.name, 
    ingredient.name 
from 
    menuItem INNER JOIN ingredient 
    ON menuItem.ingredientId = ingredient.id;


# Use Many-to-Many
select 
    menuItem.name, 
    ingredient.name 
from 
    menuItem,
    ingredient,
    menuItemIngredient
where    
    menuItem.id = menuItemIngredient.menuItemId
    AND ingredient.id = menuItemIngredient.ingredientId;

# Inner Join with Join Table
select 
    menuItem.name, 
    ingredient.name 
from 
    menuItem 
right join menuItemIngredient
    on menuItem.id = menuItemIngredient.menuItemId
left join ingredient
    on ingredient.id = menuItemIngredient.ingredientId;




