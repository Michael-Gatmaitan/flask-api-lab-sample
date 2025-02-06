CREATE DATABASE IF NOT EXISTS inventory_db;

CREATE TABLE items IF NOT EXISTS (
    itemcode INT AUTO_INCREMENT PRIMARY KEY,
    item_description VARCHAR(255) NOT NULL,
    item_unitprice DECIMAL(10, 2) NOT NULL,
    item_quantity INT NOT NULL
);

---------------------------------------

CREATE DATABASE IF NOT EXISTS pos_db;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL
)

CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    itemcode INT NOT NULL,
    payment DECIMAL(10, 2) NOT NULL,
    change DECIMAL(10, 2) NOT NULL,
    order_quantity INT NOT NULL
)