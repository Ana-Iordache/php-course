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
       $books = [ 
        [
            'title' => 'Book 1',
            'author' => 'author 1',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'title' => 'Book 2',
            'author' => 'author 3',
            'purchaseUrl' => 'http://example.com'
        ]
    ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <a href="<?= $book['purchaseUrl'] ?>">
                <li><?= $book['title'] ?> </li>
            </a>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>