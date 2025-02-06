# import flask
# import mysql.connector
from db import inventory_db

def get_item_by_id(itemcode):
    db = inventory_db()
    # db = mysql.connector.connect(
    #     host="localhost",
    #     user="root",  # Replace with your MySQL username
    #     password="",  # Replace with your MySQL password
    #     database="inventory_db",
    # )
    cursor = db.cursor(dictionary=True)
    query = "SELECT * FROM items WHERE itemcode = %s"
    args = (itemcode,)
    cursor.execute(query, args)
    # db.commit()
    # cursor.close()
    item = cursor.fetchall()
    # response = jsonify(item)
    # response.headers.add("Access-Control-Allow-Origin", "*")
    return item

# newItem = get_item_by_id(2)
# print(newItem)