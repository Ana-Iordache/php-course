<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <h1> Recommended books </h1>

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