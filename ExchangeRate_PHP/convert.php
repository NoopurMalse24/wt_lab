<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dollarAmount = floatval($_POST['dollarAmount']);
    // Hard-coded exchange rate
    $exchangeRate = 82.50;
    $rupees = $dollarAmount * $exchangeRate;
} else {
    // Redirect to form if accessed directly
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Conversion Result</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Conversion Result</h2>
        <div class="card w-50 mx-auto">
            <div class="card-body text-center">
                <p class="card-text">Amount in US Dollars: <strong>$<?php echo number_format($dollarAmount, 2); ?></strong></p>
                <p class="card-text">Converted Amount in Indian Rupees: <strong>₹<?php echo number_format($rupees, 2); ?></strong></p>
                <a href="index.php" class="btn btn-primary mt-3">Convert Another</a>
            </div>
        </div>
    </div>
</body>
</html>
