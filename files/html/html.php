<?php

$content = file_get_contents('index.html');

$htmlObject = new DOMDocument();
$htmlObject->loadHTML($content);

$table = $htmlObject->createElement('table');
$tableRow = $htmlObject->createElement('tr');
$tableCell = $htmlObject->createElement('td');

$tableCell->nodeValue = 'Hello world!';

$tableRow->appendChild($tableCell);
$table->appendChild($tableRow);

$htmlObject->append($table);

$res = $htmlObject->saveHTML();

// file_put_contents('index.html', $res);
// echo $res;
