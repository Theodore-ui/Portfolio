<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=theodore_portfolio;port=3306","theodore_lorenc","SandSandapp11%35");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Unable to connect";
    echo $e->getMessage();
    exit;
}
