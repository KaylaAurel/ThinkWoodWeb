<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenPack - Forum</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Komunitas</h1>
        <!-- Include menu -->
    </header>
    <main>
        <h2>Forum Komunitas</h2>
        <form action="post_forum.php" method="post">
            <label for="topic">Topic:</label>
            <input type="text" id="topic" name="topic" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <input type="submit" value="Post">
        </form>

        <?php
        $sql = "SELECT forum.id, users.username, forum.topic, forum.message, forum.post_date 
                FROM forum JOIN users ON forum.user_id = users.id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='post'>";
                echo "<h3>" . $row['topic'] . "</h3>";
                echo "<p>Posted by " . $row['username'] . " on " . $row['post_date'] . "</p>";
                echo "<p>" . $row['message'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No posts available.</p>";
        }
        ?>
    </main>
    <footer>
        <!-- Include footer -->
    </footer>
</body>
</html>
