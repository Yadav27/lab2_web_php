<?php
$file = 'inventory.json';

// Load inventory from the file
if (file_exists($file)) {
    $groceryDetails = json_decode(file_get_contents($file), true);
} else {
    echo "<h1>No inventory data found!</h1>";
    exit;
}

echo "<h1>Grocery Inventory</h1>";
echo "<table border='1'>";
echo "<tr><th>Name</th><th>Type</th><th>Price</th><th>Expiry Date</th></tr>";

foreach ($groceryDetails as $name => $details) {
    echo "<tr>";
    echo "<td>{$name}</td>";
    echo "<td>{$details['type']}</td>";
    echo "<td>\${$details['price']}</td>";
    echo "<td>{$details['expiry_date']}</td>";
    echo "</tr>";
}

echo "</table>";
?>
