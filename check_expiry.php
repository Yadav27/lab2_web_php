<?php
$file = 'inventory.json';

// Load inventory from the file
if (file_exists($file)) {
    $groceryDetails = json_decode(file_get_contents($file), true);
} else {
    echo "<h1>No inventory data found!</h1>";
    exit;
}

echo "<h1>Check Expiry Status</h1>";
echo "<table border='1'>";
echo "<tr><th>Name</th><th>Type</th><th>Price</th><th>Expiry Date</th><th>Status</th></tr>";

// Get the current date
$currentDate = date('Y-m-d');

// Check each item's expiry date
foreach ($groceryDetails as $name => $details) {
    $expiryDate = $details['expiry_date'];
    $status = ($expiryDate < $currentDate) ? "<span style='color: red;'>Expired</span>" : "<span style='color: green;'>Valid</span>";

    echo "<tr>";
    echo "<td>{$name}</td>";
    echo "<td>{$details['type']}</td>";
    echo "<td>\${$details['price']}</td>";
    echo "<td>{$expiryDate}</td>";
    echo "<td>{$status}</td>";
    echo "</tr>";
}

echo "</table>";
?>
