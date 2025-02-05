from flask import Flask, jsonify, request
import mysql.connector
# from flask_mysqldb import MySQL
# from db import db

app = Flask(__name__)
# db = db()
app.config["MYSQL_HOST"] = "localhost"
app.config["MYSQL_USER"] = "root"
app.config["MYSQL_PASSWORD"] = ""
app.config["MYSQL_DB"] = "inventory_db"


@app.route("/api/items", methods=["GET"])
def get_items():
    db = mysql.connector.connect(
        host="localhost",
        user="root",  # Replace with your MySQL username
        password="",  # Replace with your MySQL password
        database="inventory_db",
    )

    cursor = db.cursor(dictionary=True)
    cursor.execute("SELECT * FROM items")
    items = cursor.fetchall()

    # cursor.close()

    response = jsonify(items)
    response.headers.add("Access-Control-Allow-Origin", "*")
    # db.close()

    return response


@app.route("/api/add_item", methods=["POST"])
def handle_add_item():
    if request.method == "POST":
        print("Create a new item")
        db = mysql.connector.connect(
            host="localhost",
            user="root",  # Replace with your MySQL username
            password="",  # Replace with your MySQL password
            database="inventory_db",
        )

        # get url arguments
        # description = request.args["item_description"]

        cursor = db.cursor(dictionary=True)
        query = """INSERT INTO items (item_description, item_unitprice, item_quantity)
        VALUES ('Sample description', 200, 280)"""
        # VALUES (%s, %s, %s)"""
        # record = ("Sample description 2", 200, 10)
        # cursor.execute(query, record)
        cursor.execute(query)
        db.commit()
        print(cursor.rowcount)
        cursor.close()

        # createdItem = cursor.fetchall()
        # print(createdItem)
        #
        # response = jsonify(createdItem)
        # response.headers.add("Access-Control-Allow-Origin", "*")

        # return jsonify("added")
        return str(cursor.rowcount)


@app.route("/api/items/<item_id>", methods=["GET", "POST"])
def get_item_by_id(item_id):
    if request.method == "GET":
        print(item_id)

        response = jsonify(item_id)
        response.headers.add("Access-Control-Allow-Origin", "*")

        return response
    elif request.method == "POST":
        print("POST new item")


if __name__ == "__main__":
    app.run(debug=True)
