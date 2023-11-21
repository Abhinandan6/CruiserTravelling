<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $description = $_POST["decsription"];
    $services = $_POST["services"];

    // Upload image
    $image_path = null;
    if ($_FILES["image"]["error"] == 0) {
        $uploadsDir = "uploads/";
        $imageName = uniqid() . "_" . basename($_FILES["image"]["name"]);
        $imagePath = $uploadsDir . $imageName;
        move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath);
        $image_path = $imagePath;
    }

    // Insert product into the database
    $sql = "INSERT INTO products (name, price, description,services, image_path) VALUES ('$name', '$price', '$description','$services', '$image_path')";
    $result = $conn->query($sql);
}

$conn->close();
header("Location: p.php");
