<?php
    define("HOST", "localhost");
    define("USER", "root");
    define("PASSWORD", "");
    define("PORT", "3306");
    define("DBNAME", "contactappdb");

    $dsn = "mysql:host=" . HOST . ";dbname=" . DBNAME;

    try {
        $pdo = new PDO($dsn, USER, PASSWORD);
    } catch(PDOException $e) {
        die("There was an error, " . $e);
    }

    function login($email, $password, $pdo) {
        $sql = "SELECT * FROM users WHERE email=:email and password=:password";
        $pdo->prepare($sql);
    }

