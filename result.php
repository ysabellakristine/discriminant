<!DOCTYPE html>
<html lang="en">
<head>
    <title>RESULTS</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = isset($_POST['a']) ? floatval($_POST['a']) : null;
    $b = isset($_POST['b']) ? floatval($_POST['b']) : null;
    $c = isset($_POST['c']) ? floatval($_POST['c']) : null;

    if (is_null($a) || is_null($b) || is_null($c)) {
        echo "<div class='result'>Please enter valid numbers.</div>";
    } else {
        $discriminant = ($b * $b) - (4 * $a * $c);
        echo "<div class='container'>The discriminant is: $discriminant</div>";
    }
}
?>
</body>
</html>
