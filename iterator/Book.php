<?php

namespace iterator;


class Book
{
  /**
   * @var string
   */
  private $title;

  /**
   * @var string
   */
  private $author;

  /**]
   * Book constructor.
   * @param string $title
   * @param string $author
   */
  public function __construct(string $title, string $author)
  {
    $this->author = $author;
    $this->title = $title;
  }

  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }

  /**
   * @return string
   */
  public function getAuthor()
  {
    return $this->author;
  }
}