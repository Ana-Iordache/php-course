<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <!-- <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style> -->
</head>
<body>
    <h1> Recommended books </h1>
    <?php
       $books = [ "Book 1", "Book 2", "Book 3"];
    ?>

    <ul>
        <!-- <?php foreach ($books as $book) {
            echo "<li>$book</li>";
        }

        ?> -->
        <!-- or -->
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?> </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>