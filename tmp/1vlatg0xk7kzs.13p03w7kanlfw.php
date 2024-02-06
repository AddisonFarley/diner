<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to the GRC Diner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/diner-styles.css">
</head>
<body>
<div class="container">
    <h1>GRC Diner</h1>
    <h2>Thank you for your order!</h2>
    <p>You ordered <?= ($SESSION['food']) ?> for <?= ($SESSION['meal']) ?></p>
    <p>Condiments:  <?= ($SESSION['conds']) ?></p>
</div>
</body>
</html>