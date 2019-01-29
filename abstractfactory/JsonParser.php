<?php

namespace abstractfactory;


class JsonParser implements ParserInterface
{
  /**
   * @param string $data
   * @return mixed
   */
  public function parse(string $data): array
  {
    return json_decode($data, true);
  }
}
