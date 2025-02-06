<?php include("templates/top.php"); ?>

<script defer>
    function submitOrder(e) {
        // http://127.0.0.1:5000/api/orders?user_id=3&itemcode=3&payment=1000&order_quantity=1
      e.preventDefault();
      const form = document.getElementsByTagName("form")[0];
      console.log("mamamo");

      const formData = new FormData(form);
      console.log(formData);

      // const { user_id, itemcode, payment, order_quantity } = formData;
      const user_id = formData.get("user_id");
      const itemcode = formData.get("itemcode");
      const payment = formData.get("payment");
      const order_quantity = formData.get("order_quantity");

      async function performSubmit() {
        try {
          const url = `http://127.0.0.1:5000/api/orders?user_id=${user_id}&itemcode=${itemcode}&payment=${payment}&order_quantity=${order_quantity}`;
          const response = await fetch(url, {
            method: "POST",
            headers: {
              'Content-Type': 'application/json',
              'Access-Control-Allow-Origin': '*'
            }
          });

          console.log(response);
        } catch(err) {
          console.log(err)
        }
      }

      performSubmit();
    }

    async function insertUsers() {
        const req = await fetch("http://127.0.0.1:5000/api/users");
        const result = await req.json();

        console.log(result);

        const selectTag = document.getElementById("user_id");

        for (let user of result) {
            selectTag.innerHTML += `
                <option value="${user.id}">${user.first_name} ${user.last_name}</option>
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


<form onsubmit="return submitOrder(event)">

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
