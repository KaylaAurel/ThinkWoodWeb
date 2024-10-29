<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenPack - Sustainability</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Edukasi</h1>
        <!-- Include menu -->
    </header>
    <main>
        <h2>Sustainability Initiatives</h2>
        <?php
        $sql = "SELECT * FROM sustainability";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='initiative'>";
                echo "<h3>" . $row['title'] . "</h3>";
                echo "<p>" . $row['content'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No information available.</p>";
        }
        ?>
    </main>
    <footer>
        <!-- Include footer -->
    </footer>
</body>
</html>
