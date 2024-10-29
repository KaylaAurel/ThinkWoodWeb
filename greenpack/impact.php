<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenPack - Impact Tracking</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Pelacakan Dampak</h1>
        <!-- Include menu -->
    </header>
    <main>
        <h2>Environmental Impact</h2>
        <?php
        $sql = "SELECT * FROM impact";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='metric'>";
                echo "<h3>" . $row['metric'] . "</h3>";
                echo "<p>Value: " . $row['value'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No impact data available.</p>";
        }
        ?>
    </main>
    <footer>
        <!-- Include footer -->
    </footer>
</body>
</html>
