<?php

use adapter\Book;
use adapter\EBook;
use adapter\EBookAdapter;
use adapter\BookViewer;

require_once __DIR__ . '/../vendor/autoload.php';

$book = new Book();
$eBook = new EBookAdapter(new EBook());

(new BookViewer($eBook))->view();
