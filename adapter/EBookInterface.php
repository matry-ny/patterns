<?php

namespace adapter;

/**
 * Interface EBookInterface
 * @package adapter
 */
interface EBookInterface
{
  public function unlock();

  public function tapNext();

  public function getPageNumber();
}
