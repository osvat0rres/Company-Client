<?php
include "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Page</title>
    <link rel="stylesheet" href="inventory.css">
</head>
<body>

<div class="container">

    <h1>This is the inventory page</h1>

    <!-- Add Item Form -->
    <div class="card">
        <form action="sendData.php" method="post" class="form-box">
            
            <label>Item name:</label>
            <input type="text" name="item" >

            <label>Item ID:</label>
            <input type="text" name="id">

            <label>Category:</label>
            <div class="checkbox-group">
                <label><input type="checkbox" name="category[]" value="Games"> Games</label>
                <label><input type="checkbox" name="category[]" value="Groceries"> Groceries</label>
                <label><input type="checkbox" name="category[]" value="Babies"> Babies</label>
                <label><input type="checkbox" name="category[]" value="Kitchen"> Kitchen</label>
                <label><input type="checkbox" name="category[]" value="Entertainment"> Entertainment</label>
            </div>

            <label>Price:</label>
            <input type="number" name="price"  step="0.01" min="0" >

            <label>Available:</label>
            <input type="number" name="availability" >

            <div class="button-group">
                <input type="submit" value="Upload">
                <input type="submit" value="Buyer Page" formaction="buyer.php">
            </div>

        </form>
    </div>

    <!-- Delete Item -->
    <h2>Delete an item by ID</h2>

    <div class="card">
        <form action="delete.php" method="post">
            <label>Item ID:</label>
            <input type="text" name="id" required>
            <input type="submit" value="Delete">
        </form>
    </div>

</div>

</body>
</html>