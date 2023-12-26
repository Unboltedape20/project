<?php
// process.php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $customerName = $_POST["customer_name"];
    $customerEmail = $_POST["customer_email"]; // New line
    $pizzaType = $_POST["pizza_type"];
    $quantity = intval($_POST["quantity"]);

    // Calculate total price (replace with your pricing logic)
    $pricePerPizza = 10.99; // Adjust based on your pricing
    $totalPrice = $quantity * $pricePerPizza;

    // Connect to the database (replace with your database credentials)
    $conn = new mysqli("localhost", "Mithilesh", "password123", "pizza_shop");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert order into the database
    $sql = "INSERT INTO orders (customer_name, customer_email, pizza_type, quantity, total_price) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssd", $customerName, $customerEmail, $pizzaType, $quantity, $totalPrice);
    $stmt->execute();

    // Close the database connection
    $stmt->close();
    $conn->close();

    // Redirect to a thank you page or display a success message
    header("Location: thank_you.html");
    exit();
}
?>

