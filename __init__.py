from flask import Flask, jsonify 
import mysql.connector
app = Flask(__name__)

@app.route('/api/items', methods=['GET'])
def get_items(): 
    db = mysql.connector.connect(
        host="localhost", 
        user="root", 		# Replace with your MySQL username 
        password="",		# Replace with your MySQL password 
        database="inventory_db"
    )
     
    cursor = db.cursor(dictionary=True)
    cursor.execute("SELECT * FROM items") 
    items = cursor.fetchall()
    
    response = jsonify(items)
    response.headers.add('Access-Control-Allow-Origin', '*')
    db.close() 
    
    return response 

if __name__=='__main__': app.run(debug=True)