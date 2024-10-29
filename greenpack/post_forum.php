<?php
include 'config.php';

// Assume user is logged in and user ID is 1
$user_id = 1; // Replace this with the actual logged-in user ID
$topic = $_POST['topic'];
$message = $_POST['message'];

$sql = "INSERT INTO forum (user_id, topic, message) VALUES ('$user_id', '$topic', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Post created successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<a href="forum.php">Back to Forum</a>
