<?php

namespace abstractfactory;

/**
 * Class ParserFactory
 * @package abstractfactory
 */
class ParserFactory
{
  public function getJsonParser(): ParserInterface
  {
    return (new JsonParser());
  }

  public function getCsvParser(): ParserInterface
  {
    return (new CsvParser());
  }

  /**
   * @param string $format
   * @return ParserInterface
   * @throws \Exception
   */
  public static function getParser(string $format): ParserInterface
  {
    switch ($format) {
      case 'json':
        return new JsonParser();
      case 'csv':
        return new CsvParser();
      default:
        throw new \Exception("Format '{$format}' is not supported");
    }
  }
}
