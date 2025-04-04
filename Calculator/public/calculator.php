<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Azubi\Math\Math;

$math = new Math();

// Get parameters from the query using the null coalescing operator
$value1 = (float) ($_GET['value1'] ?? 0);
$value2 = (float) ($_GET['value2'] ?? 0);
$operation = $_GET['operation'] ?? 'add';

switch ($operation) {
    case 'add':
        $result = $math->add($value1, $value2);
        break;
    case 'subtract':
        $result = $math->subtract($value1, $value2);
        break;
    case 'multiply':
        $result = $math->multiply($value1, $value2);
        break;
    case 'divide':
        $result = ($value2 != 0) ? $math->divide($value1, $value2) : 'Cannot divide by zero';
        break;
    default:
        $result = 'Invalid operation';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- Logo Header -->
<header class="header">
    <img src="assets/CHECK24_Logo.png" alt="CHECK24 Logo" class="logo">
</header>

<div class="result-container">
    <p><strong>Result: <?= $result ?></strong></p>
    <button class="button" onclick="window.close();">Close</button>
</div>

<!-- Author Signature -->
<footer class="signature">
    Nurlan Yunusov
</footer>

</body>

</html>