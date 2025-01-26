<!DOCTYPE html>
<html>
<head>
    <title>Add Grocery Item</title>
</head>
<body>
    <h1>Add New Grocery Item</h1>
    <form action="add_item_process.php" method="post">
        <label for="name">Item Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="type">Type:</label>
        <input type="text" id="type" name="type" required><br><br>

        <label for="price">Price ($):</label>
        <input type="number" id="price" name="price" step="0.01" required><br><br>

        <label for="expiry_date">Expiry Date:</label>
        <input type="date" id="expiry_date" name="expiry_date" required><br><br>

        <button type="submit">Add Item</button>
    </form>
</body>
</html>
