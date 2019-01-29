<?php

namespace abstractfactory;

/**
 * Class CsvParser
 * @package abstractfactory
 */
class CsvParser implements ParserInterface
{
  /**
   * @param string $data
   * @return mixed
   */
  public function parse(string $data): array
  {
    $result = [];
    foreach(explode("\n", $data) as $row) {
      $result[] = str_getcsv($row);
    }

    return $result;
  }
}
