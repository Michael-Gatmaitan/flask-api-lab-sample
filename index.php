<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
</head>

<body>
    <h1>Add New Item</h1>
    <form action="save_item.php" method="POST">
        <label for="description">Item Description:</label>
        <br> <input type="text" name="description" id="description" required>
        <br> <label for="unitprice">Unit Price:</label>
        <br> <input type="number" step="0.01" name="unitprice" id="unitprice" required>
        <br> <label for="quantity">Quantity:</label>
        <br> <input type="number" name="quantity" id="quantity" required>
        <br>
        <br> <button type="submit">Save
            <?php
            $servername = "localhost";
            $username = "root";
            $dbname = "inventory_db";
            $conn = new mysqli($servername, $username, '', $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $description = $_POST['description'];
                $unitprice = $_POST['unitprice'];
                $quantity = $_POST['quantity'];
                $sql = "INSERT INTO items (item_description, item_unitprice, item_quantity) VALUES ('$description', '$unitprice', '$quantity')";
                
                if ($conn->query($sql) === TRUE) {
                    echo "Item added successfully!";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            $conn->close();
            ?>
            Item
        </button>
    </form>
</body>

</html>