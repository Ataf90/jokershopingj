<?php

$stmt = $conn->prepare("SELECT * FROM products LIMIT 12");

$stmt->execute();

$featured_products = $stmt->get_result(); //array



?>