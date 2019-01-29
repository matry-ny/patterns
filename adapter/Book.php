<?php

namespace adapter;

/**
 * Class Book
 * @package adapter
 */
class Book implements BookInterface
{
  private $page = 1;

  public function open()
  {
    echo 'Book is opened<br>';
  }

  public function turnPage()
  {
    $this->page++;
    echo 'Page is turned<br>';
  }

  public function getPageNumber()
  {
    echo 'Page: ' . $this->page . '<br>';
  }
}