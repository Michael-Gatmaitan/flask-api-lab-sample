<?php
$servername = "localhost";
$username = "root";
$dbname = "inventory_db";
$conn = new mysqli($servername, $username, '', $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$description = $_POST['description'];
$unitprice = $_POST['unitprice'];
$quantity = $_POST['quantity'];
$sql = "INSERT INTO items (item_description, item_unitprice, item_quantity)
        VALUES ('$description', '$unitprice', '$quantity')";
if ($conn->query($sql) === TRUE) {
    echo "Item added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>