<?php include("templates/top.php"); ?>

<script>
    function submitOrder() {

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
        
    }

    insertUsers();
</script>


<form>
    <label for="user_id">Select user:</label>

    <select name="user_id" id="user_id">
    </select>


</form>

<?php include("templates/bottom.php"); ?>