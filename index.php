<?php $title = '1914'; include("templates/top.php");?>
        <form action="save_item.php" method="POST">
            <h1>Add New Item</h1>
            <label for="description">Item Description:</label>
            <br> <input type="text" name="description" id="description" required>
            <br> <label for="unitprice">Unit Price:</label>
            <br> <input type="number" step="0.01" name="unitprice" id="unitprice" required>
            <br> <label for="quantity">Quantity:</label>
            <br> <input type="number" name="quantity" id="quantity" required>
            <br>
            <br> 
            <div class="btns">
                <button>Clear</button>
                <button type="submit">Save
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
            </div>
        </form>

<?php include("templates/bottom.php");?>
