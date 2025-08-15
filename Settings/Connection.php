<?php

try {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=test_app;charset=utf8", "phpuser", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}