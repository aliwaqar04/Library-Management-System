<?php
// Database configuration
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'lms';
// Create a connection to MySQL
$conn = new mysqli($db_host, $db_user, $db_pass);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Create database
$sql_create_db = "CREATE DATABASE IF NOT EXISTS $db_name";
if ($conn->query($sql_create_db) === TRUE) {
echo "Database created successfully<br>";
} else {
echo "Error creating database: " . $conn->error . "<br>";
}
// Select the created database
$conn->select_db($db_name);