<?php

try {
    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=teste_json;user=postgres;password=1q');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit();
}