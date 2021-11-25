<?php
$conn = new mysqli($_ENV["SQL_SERVER"], $_ENV["SQL_USER"], $_ENV["SQL_PASSWORD"], $_ENV["SQL_DATABASE"]);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>