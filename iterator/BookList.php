<?php

namespace iterator;

use Countable;
use Iterator;

/**
 * Class BookList
 * @package iterator
 */
class BookList implements Countable, Iterator
{
  /**
   * @var Book[]
   */
  private $books = [];

  /**
   * @param Book $book
   */
  public function addBook(Book $book)
  {
    if (!in_array($book, $this->books)) {
      $this->books[] = $book;
    }
  }

  /**
   * @param Book $book
   */
  public function removeBook(Book $book)
  {
    $index = array_search($book, $this->books);

    if (is_int($index)) {
      unset($this->books[$index]);
      $this->books = array_values($this->books);
    }
  }

  /**
   * @return int
   */
  public function count()
  {
    return count($this->books);
  }

  /**
   * @var int
   */
  public $currentIndex = 0;

  /**
   * @return Book
   */
  public function current()
  {
    return $this->books[$this->key()];
  }

  public function next()
  {
    $this->currentIndex++;
  }

  /**
   * @return int
   */
  public function key()
  {
    return $this->currentIndex;
  }

  /**
   * @return bool
   */
  public function valid()
  {
    return array_key_exists($this->key(), $this->books);
  }

  public function rewind()
  {
    $this->currentIndex = 0;
  }
}