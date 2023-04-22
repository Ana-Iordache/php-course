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
    });

    // OR we can simply use the php function: array_filter

require 'index.view.php';

?> 