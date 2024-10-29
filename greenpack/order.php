<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenPack - Order</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Pemesanan</h1>
        <!-- Include menu -->
    </header>
    <main>
        <h2>Pesan disini</h2>
        <form action="process_order.php" method="post">
            <label for="product_id">Product:</label>
            <select id="product_id" name="product_id">
                <?php
                $sql = "SELECT * FROM products";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                    }
                }
                ?>
            </select>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" required>
            <input type="submit" value="Order">
        </form>
    </main>
    <footer>
        <!-- Include footer -->
    </footer>
</body>
</html>
