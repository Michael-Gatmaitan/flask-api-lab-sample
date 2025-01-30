<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item_code = $_POST['item_code'];
    $item_name = $_POST['item_name'];
    $item_description = $_POST['item_description'];
    $unit_price = $_POST['unit_price'];
    $quantity = $_POST['quantity'];

    $conn = new mysqli('localhost', 'root', '', 'inventory_db');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO items (item_code, item_name, item_description, unit_price, quantity) 
            VALUES ('$item_code', '$item_name', '$item_description', '$unit_price', '$quantity')";

    if ($conn->query($sql) === TRUE) {
        echo "New item added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<link rel="stylesheet" href="./style.css">

<form method="POST">
    Item Code: <input type="text" name="item_code"><br>
    Item Name: <input type="text" name="item_name"><br>
    Description: <textarea name="item_description"></textarea><br>
    Unit Price: <input type="number" name="unit_price" step="0.01"><br>
    Quantity: <input type="number" name="quantity"><br>
    <button type="submit">Add Item</button>
</form>

<a href="mainpage.php">Back to Main Page</a>