<?php 

// Make connection to the database
$pdo = new PDO('mysql:host=localhost; port=3306;dbname=products_crud', 'root', '');
// Tell PDO if there is an error
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
