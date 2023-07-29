<?php
    require "../vendor/autoload.php";
    $dotenv = Dotenv\Dotenv::createImmutable('../');
    $dotenv->load();

    $mysql = new mysqli($_ENV['DB_Host'], $_ENV['DB_Name'], $_ENV['DB_Password'], $_ENV['DB'], $_ENV['DB_Port']);

    # Test to confirm that I have connection to my DB
    echo '<pre>';
    var_dump($mysql);
    echo '</pre>';
?>