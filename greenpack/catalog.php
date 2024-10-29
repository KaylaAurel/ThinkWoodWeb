<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenPack - Katalog</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Katalog</h1>
        <!-- Include menu -->
    </header>
    <main>
        <h2>Katalog Produk</h2>
        <?php
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<h3>" . $row['name'] . "</h3>";
                echo "<img src='images/" . $row['image'] . "' alt='" . $row['name'] . "'>";
                echo "<p>" . $row['description'] . "</p>";
                echo "<p>Price: $" . $row['price'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No products found.</p>";
        }
        ?>
    </main>
    <footer>
        <!-- Include footer -->
    </footer>
</body>
</html>
