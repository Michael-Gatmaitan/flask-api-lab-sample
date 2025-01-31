# This is a flask template with HTML

This template uses flask, a lightweight WSGI web application framework and PHP a general-purpose scripting language that is especially suited to web development and HTML templates for it's UI.

## Installation

Use the package manager [pip](https://pip.pypa.io/en/stable/) to install libraries.

### Install [flask](https://flask.palletsprojects.com/) and mysql.connector

```bash
pip install flask mysql.connector
```

## Usage

- cd to **XAMPP** **htdocs** **folder**

```bash
cd C:\xampp\htdocs
```

- Clone this repo

```git
git clone https://github.com/Michael-Gatmaitan/flask-api-lab-sample
```

- Navigate to [phpMyAdmin](http://localhost/phpmyadmin/)
- Create a database named **inventory_db**
- Navigate to SQL section and run this query to create table for items

```sql
CREATE TABLE items (
    itemcode INT AUTO_INCREMENT PRIMARY KEY,
    item_description VARCHAR(255) NOT NULL,
    item_unitprice DECIMAL(10, 2) NOT NULL,
    item_quantity INT NOT NULL
);
```

- Then navigate to home page [http://localhost/flask-api-lab-sample/](http://localhost/flask-api-lab-sample/)

Navigate to **init**.py root directory and run this command

```bash
python __init__.py
```

## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

## Information

This template is from Sir Randy Pangilinan (Crono Bane) and I (Michael Gatmaitan) made the design and debugged the code to make it work as a part of activity.

## License

[MIT](https://choosealicense.com/licenses/mit/)
