<?php
session_start();

if (!isset($_SESSION['name'])) {
    header("Location: index.html");
    exit();
}

$name = $_SESSION['name'];

echo "Welcome, $name!";
?>
