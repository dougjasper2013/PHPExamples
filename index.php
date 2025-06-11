<!DOCTYPE html>
<html>
<head>
    <title>PHP Array Demo</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background: #f0f4f8; }
        h2 { color: #2a6592; }
        pre { background: #fff; border: 1px solid #ccc; padding: 10px; }
    </style>
</head>
<body>

<h1>PHP Array Demo</h1>

<?php
// Indexed array
$colors = ["Red", "Green", "Blue"];
array_push($colors, "Yellow"); // Add new color
sort($colors); // Sort alphabetically

echo "<h2>Indexed Array (Colors)</h2>";
echo "<pre>";
print_r($colors);
echo "Total colors: " . count($colors) . "\n";
echo "Is 'Blue' in the array? " . (in_array("Blue", $colors) ? "Yes" : "No") . "\n";
echo "</pre>";

// Associative array
$person = [
    "first_name" => "John",
    "last_name" => "Doe",
    "age" => 30,
    "email" => "john@example.com"
];

asort($person); // Sort by values
$keys = array_keys($person);

echo "<h2>Associative Array (Person Info)</h2>";
echo "<pre>";
print_r($person);
echo "Keys: ";
print_r($keys);
echo "</pre>";

// Merging arrays
$merged = array_merge($colors, $keys);

echo "<h2>Merged Array (Colors + Keys)</h2>";
echo "<pre>";
print_r($merged);
echo "</pre>";
?>

</body>
</html>
