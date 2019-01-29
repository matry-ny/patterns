<?php

use iterator\Book;
use iterator\BookList;

require_once __DIR__ . '/../vendor/autoload.php';

$list = new BookList();

$inferno = new Book('Inferno', 'Den Brown');

$list->addBook($inferno);
$list->addBook($inferno);

$angelsAndDemons = new Book('Angels And Demons', 'Den Brown');
$list->addBook($angelsAndDemons);

$list->removeBook($inferno);

$list->addBook($inferno);

$codeDaVinci = new Book('Code DaVinci', 'Den Brown');
$list->addBook($codeDaVinci);

var_dump(count($list));

foreach($list as $book) {
  echo "{$book->getAuthor()}: {$book->getTitle()}\n";
}
