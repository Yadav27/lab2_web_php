<?php
$file = 'inventory.json';

// Load inventory from the file
if (file_exists($file)) {
    $groceryDetails = json_decode(file_get_contents($file), true);
} else {
    // Default inventory if file doesn't exist
    $groceryDetails = [
        "Milk" => ["type" => "Dairy", "price" => 2.50, "expiry_date" => "2025-01-30"],
        "Bread" => ["type" => "Bakery", "price" => 1.20, "expiry_date" => "2025-02-01"],
        "Eggs" => ["type" => "Poultry", "price" => 3.00, "expiry_date" => "2025-01-28"],
        "Butter" => ["type" => "Dairy", "price" => 4.00, "expiry_date" => "2025-02-05"]
    ];
    // Save initial inventory to the file
    file_put_contents($file, json_encode($groceryDetails, JSON_PRETTY_PRINT));
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $expiry_date = $_POST['expiry_date'];

    // Add new item to the inventory
    $groceryDetails[$name] = ["type" => $type, "price" => $price, "expiry_date" => $expiry_date];

    // Save updated inventory to the file
    file_put_contents($file, json_encode($groceryDetails, JSON_PRETTY_PRINT));

    echo "<h1>Item Added Successfully!</h1>";
    echo "<p><a href='display_inventory.php'>View Inventory</a></p>";
}
?>
