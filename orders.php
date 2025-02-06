<?php include("templates/top.php"); ?>

<script defer>
    function submitOrder() {
        // e.preventDefault();
        console.log("mamamo")
    }

    async function insertUsers() {
        const req = await fetch("http://127.0.0.1:5000/api/users");
        const result = await req.json();

        console.log(result);

        const selectTag = document.getElementById("user_id");

        for (let user of result) {
            selectTag.innerHTML += `
                <option value="${user.id}">${user.firstname} ${user.lastname}</option>
            `;
        }
    }

    async function displayProduct() {
        const req = await fetch("http://127.0.0.1:5000/api/items");
        const result = await req.json();

        console.log(result);

        const selectTag = document.getElementById("itemcode");

        for (let item of result) {
            selectTag.innerHTML += `
                <option value="${item.itemcode}">${item.item_description} ${item.item_quantity}</option>
            `;
        }
    }

    insertUsers();
    displayProduct();

    // events
    function checkItemQuantity(e) {
        console.log(e)
    }
</script>


<form onsubmit="submitOrder()">

    <div>
        <label for="user_id">Select user:</label>

        <select name="user_id" id="user_id">
        </select>

        <label for="user_id">Select item:</label>

        <select name="itemcode" id="itemcode">
        </select>
    </div>

    <label for="payment">Payment</label>
    <input type="text" id="payment" name="payment" />

    <label for="quantity">Order quantity</label>
    <input type="number" id="order_quantity" name="order_quantity" />

    <div class="btn-container">
        <button type="submit">Order</button>
        <button type="button">Cancel</button>
    </div>

</form>

<?php include("templates/bottom.php"); ?>