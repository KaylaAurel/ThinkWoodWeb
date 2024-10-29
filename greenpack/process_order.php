<?php
include 'config.php';

$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];

$sql = "INSERT INTO orders (product_id, quantity) VALUES ('$product_id', '$quantity')";

if ($conn->query($sql) === TRUE) {
    echo "Order placed successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<a href="order.php">Back to Order</a>
