<?php

require_once __DIR__ . '/../vendor/autoload.php';

use abstractfactory\ParserFactory;

echo '<h1>Abstract Factory</h1>';

$parser = new ParserFactory();
echo '<h3>JSON</h3>';

$data = '{"id": 1, "title": "Some title", "properties": ["Good", "Evil"]}';

echo "<p>{$data}</p>";

echo '<pre>';
print_r($parser->getJsonParser()->parse($data));
echo '</pre><hr>';

echo '<h3>CSV</h3>';

$data = "Dmytro Kotenko, 26 years old, PHP Developer\nAndrew Bavarsky, 22 years old, JS Developer";

echo '<p>' . nl2br($data) . '</p>';

echo '<pre>';
print_r($parser->getCsvParser()->parse($data));
echo '</pre><hr><pre>';

print_r(ParserFactory::getParser('csv')->parse($data));

echo '</pre>';




