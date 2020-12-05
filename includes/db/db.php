<?php
    define("HOST", "localhost");
    define("USER", "root");
    define("PASSWORD", "");
    define("PORT", "3306");
    define("DBNAME", "contactappdb");

    // DSN settings
    $dsn = "mysql:host=" . HOST . ";dbname=" . DBNAME;

    // Make sure we can connect to the database
    try {
        $pdo = new PDO($dsn, USER, PASSWORD);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    } catch(PDOException $e) {
        die("There was an error, " . $e);
    }

    function getList() {

    }

    // Login the user
    function login($email, $password, $pdo) {
        $sql = "SELECT * FROM users WHERE email=:email and password=:password";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email, $password]);
        $user = $stmt->fetch();
        if($user) {

        }
    }

    function logout() {
        session_destroy();
    }

