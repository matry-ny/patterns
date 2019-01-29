<?php

namespace adapter;

/**
 * Class EBookAdapter
 * @package adapter
 */
class EBookAdapter implements BookInterface
{
  /**
   * @var EBookInterface
   */
  private $ebook;

  /**
   * EBookAdapter constructor.
   * @param EBookInterface $ebook
   */
  public function __construct(EBookInterface $ebook)
  {
    $this->ebook = $ebook;
  }

  public function open()
  {
    $this->ebook->unlock();
  }

  public function turnPage()
  {
    $this->ebook->tapNext();
  }

  public function getPageNumber()
  {
    $this->ebook->getPageNumber();
  }
}