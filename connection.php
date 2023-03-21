<?php
$server_name = 'localhost:3306';
$user_name = 'theodore_lorenc';
try {
    $db = new PDO("mysql:host=$server_name;dbname=theodore_portfolio", $user_name);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Unable to connect";
    echo $e->getMessage();
    exit;
}
