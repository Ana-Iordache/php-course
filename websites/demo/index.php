<?php
    require 'functions.php';
    require 'Database.php'; // moved here so we'll have de db instance before the router is reqired
    require 'Response.php';
    require 'router.php';

    // $id = $_GET['id'];
    // $query = "select * from posts where id = {$id}";
    // if i'm writing like this i'm injecting vulerabilitites
    // because the 'id' will take everything that comes after equal in the query
    // so we should binf the variable:
    // $query = "select * from posts where id = ?";
    // or ':id' instead of '?'

    // and here i'll send "['id' => id]"
    // $posts = $db->query($query, [$id])->fetchAll();
    // $posts = $db->query($query)->fetchAll();

    // foreach($posts as $post) {
    //     echo '<li>' . $post['title'] . '</li>';
    // }
    
?>