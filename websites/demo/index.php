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
            'releaseYear' => 2008,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'title' => 'Book 2',
            'author' => 'author 2',
            'releaseYear' => 2018,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'title' => 'Book 3',
            'author' => 'author 2',
            'releaseYear' => 2020,
            'purchaseUrl' => 'http://example.com'
        ]
    ];

    function filter($items, $fn) {
        $filteredBooks = [];
        foreach($items as $item) {
            if($fn($item)) {
                $filteredBooks[] = $item;
            }
        }

        return $filteredBooks;
    }

    $filteredBooks = filter($books, function ($book) { 
        return $book['releaseYear'] > 2010;
    })

    // OR we can simply use the php function: array_filter
    ?>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['title'] ?> (<?= $book['releaseYear'] ?>)
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>