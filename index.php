<?php
// Set a cookie if not already set (expires in 1 hour)
if (!isset($_COOKIE["username"])) {
    setcookie("username", "GuestUser", time() + 3600);
    $cookieMessage = "Cookie 'username' has been set.";
} else {
    $cookieMessage = "Cookie 'username' is set to: " . $_COOKIE["username"];
}

// Clear cookie if reset requested
if (isset($_GET["reset"])) {
    setcookie("username", "", time() - 3600); // Expire it
    header("Location: index.php"); // Refresh without query param
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Array & Cookie Demo</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background: #f0f4f8; }
        h2 { color: #2a6592; }
        pre { background: #fff; border: 1px solid #ccc; padding: 10px; }
        .cookie-box { background: #fffbe0; padding: 10px; border: 1px solid #ccc; margin-bottom: 20px; }
        a.button {
            display: inline-block;
            background: #e74c3c;
            color: #fff;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<h1>PHP Array & Cookie Demo</h1>

<div class="cookie-box">
    <strong>Cookie Status:</strong><br>
    <?php echo $cookieMessage; ?>
    <br>
    <a class="button" href="?reset=true">Reset Cookie</a>
</div>

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

// Merged array
$merged = array_merge($colors, $keys);

echo "<h2>Merged Array (Colors + Keys)</h2>";
echo "<pre>";
print_r($merged);
echo "</pre>";
?>

</body>
</html>
