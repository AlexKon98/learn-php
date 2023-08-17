<?php

libxml_use_internal_errors(true);

$textContent = file_get_contents('https://www.nytimes.com/');

$domDocument = new DOMDocument();
$domDocument->loadHTML($textContent);
$siteContent = $domDocument->getElementById('site-content')->nodeValue;

file_put_contents('text.html', $textContent);
