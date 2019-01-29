<?php

namespace adapter;

/**
 * Class BookViewer
 * @package adapter
 */
class BookViewer
{
  /**
   * @var BookInterface
   */
  private $book;

  public function __construct(BookInterface $book)
  {
    $this->book = $book;
  }

  public function view()
  {
    $this->book->open();

    for ($i = 0; $i < 5; $i++) {
      $this->book->getPageNumber();
      $this->book->turnPage();
    }
  }
}