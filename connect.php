<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping-catalogue";

// Database connection
$conn = new mysqli('localhost', 'root', $"", 'shopping-catalogue');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data has been posted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get posted data
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $image_url = $_POST["image_url"];

    // Insert data into database
    $sql = "INSERT INTO products (name, description, price, image_url) VALUES ('$name', '$description', '$price', '$image_url')";
    if ($conn->query($sql) === TRUE) {
        echo "New product added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>