<?php

namespace adapter;

/**
 * Interface BookInterface
 * @package adapter
 */
interface BookInterface
{
  public function open();

  public function turnPage();

  public function getPageNumber();
}
