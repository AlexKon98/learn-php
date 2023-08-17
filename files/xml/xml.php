<?php

$xmlFile = simplexml_load_file('sample.xml');

echo $xmlFile->book->count()  . PHP_EOL;
echo $xmlFile->book[2]->author . ' ' . $xmlFile->book[2]->title;

$xmlFile->book[2]->author = 'Lev Tolstoy';
$xmlFile->book[2]->title = 'War and peace';
unset($xmlFile->book[count($xmlFile->book) - 1]);

// foreach($xmlFile->book as $key => $val) {
//   echo $val->author . ' ' . $val->title . PHP_EOL;
// }

file_put_contents('sample.xml', $xmlFile->asXML());
