<?php
$conn = new PDO(
    'mysql:host=localhost;dbname=example-pdo', 'root', ''
);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);