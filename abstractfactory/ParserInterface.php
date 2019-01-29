<?php

namespace abstractfactory;

/**
 * Interface ParserInterface
 * @package abstractfactory
 */
interface ParserInterface
{
  /**
   * @param string $data
   * @return mixed
   */
  public function parse(string $data): array;
}
