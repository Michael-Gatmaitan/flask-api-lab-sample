import mysql.connector


def db():
    db = mysql.connector.connect(
        host="localhost",
        user="root",  # Replace with your MySQL username
        password="",  # Replace with your MySQL password
        database="inventory_db",
    )

    return db
