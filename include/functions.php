<?php
function getAllProducts($pdo) {
    $stmt = $pdo->prepare('SELECT id, name, description, price FROM products');
    $stmt->execute();
    return $stmt->fetchAll();
}
