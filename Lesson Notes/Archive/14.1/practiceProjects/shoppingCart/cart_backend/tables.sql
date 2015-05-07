CREATE TABLE product (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    sku VARCHAR(255),
    name VARCHAR(255),
    description TEXT,
    category VARCHAR(255),
    price DECIMAL(10,2)
);

CREATE TABLE line_item (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    #product_sku VARCHAR(255),
    product_id INT,
    quantity INT,
    purchase_id INT
);

CREATE TABLE purchase (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    order_date TIMESTAMP,
    customer_id INT
);
 