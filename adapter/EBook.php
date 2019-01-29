<?php

namespace adapter;

/**
 * Class Ebook
 * @package adapter
 */
class EBook implements EBookInterface
{
  private $page = 1;

  public function unlock()
  {
    echo 'EBook is unlocked<br>';
  }

  public function tapNext()
  {
    $this->page++;
    echo 'Next page button is taped<br>';
  }

  public function getPageNumber()
  {
    echo 'Page: ' . $this->page . '<br>';
  }
}
