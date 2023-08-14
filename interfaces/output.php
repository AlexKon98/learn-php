<?php

interface StringWriter
{
  public function writeString(string $str);
}

class FileWriter implements StringWriter
{
  public function writeString(string $str)
  {
    file_put_contents('./example.txt', $str);
  }
}

class ScreenWriter implements StringWriter
{
  public function writeString(string $str)
  {
    echo $str . PHP_EOL;
  }
}

class StringProcessor
{
  private $writer, $str;

  public function __construct(StringWriter $writer, string $str)
  {
    $this->writer = $writer;
    $this->str = $str;
  }

  public function write()
  {
    $this->writer->writeString($this->str);
  }
}

$fileWriter = new FileWriter();
$screenWriter = new ScreenWriter();
$testString = 'Hello world';

$stringFileProcessor = new StringProcessor($fileWriter, $testString);
$stringScreenProcessor = new StringProcessor($screenWriter, $testString);

$stringFileProcessor->write();
$stringScreenProcessor->write();
