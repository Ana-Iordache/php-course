<?php
    require 'functions.php';
    require 'router.php';

    // connect to MySQL DB
    // 1. create an instance of PDO class (PHP Data Object)
    // $dsn -> data durce name => the connection string to the DB
    $dsn = "mysql:host=localhost;port=3306;dbname=learn_php;charset=utf8mb4";
    $pdo = new PDO($dsn, 'root', 'anaiordache');

    $statement = $pdo->prepare("select * from posts");
    $statement->execute();

    $posts = $statement->fetchAll(PDO::FETCH_ASSOC); // to fetch in an associative array rather than indexed
    
    foreach($posts as $post) {
        echo '<li>' . $post['title'] . '</li>';
    }
?>