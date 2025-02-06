CREATE DATABASE IF NOT EXISTS inventory_db;

CREATE TABLE items IF NOT EXISTS (
    itemcode INT AUTO_INCREMENT PRIMARY KEY,
    item_description VARCHAR(255) NOT NULL,
    item_unitprice DECIMAL(10, 2) NOT NULL,
    item_quantity INT NOT NULL
);

-- Inject data into items
INSERT INTO items (
  item_description,
  item_unitprice,
  item_quantity
) VALUES ("Sample item", 420, 69);

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL
);

-- Inject data into users
INSERT INTO users (first_name, last_name) VALUES ( 'Michael', 'Gatmaitan' );

---------------------------------------

CREATE DATABASE IF NOT EXISTS pos_db;

CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    itemcode INT NOT NULL,
    payment DECIMAL(10, 2) NOT NULL,
    p_change DECIMAL(10, 2) NOT NULL,
    order_quantity INT NOT NULL
);
