<?php

$str = 'caesar cipher';

function caesarCode(string $str, int $step) : string
{
  $arr = explode(' ', $str);
  $res = '';

  foreach ($arr as $i => $word){
    $items = str_split($word);
    foreach ($items as $key => $item){
      if ($key === count($items) - 1 && $i !== count($arr) - 1){
        $res = $res . chr(ord($item) + $step) . ' ';
      } else {
        $res = $res . chr(ord($item) + $step);
      }
    }
  }

  return $res;
}

function caesarEncode(string $str, int $step)
{
  $arr = explode(' ', $str);
  $res = '';
  $stepchange = 0;

  foreach ($arr as $i => $word){
    $items = str_split($word);
    foreach ($items as $key => $item){
      if (ord($item) - $step > 255) {
        $stepchange = 255 - (ord($item) - $step);
      } else {
        $stepchange = ord($item) - $step;
      }
      
      if ($key === count($items) - 1 && $i !== count($arr) - 1){
        $res = $res . chr($stepchange) . ' ';
      } else {
        $res = $res . chr($stepchange);
      }
    }
  }

  return $res;
}

$codeStr = caesarCode($str, 18);
$encodeStr = caesarEncode($codeStr, 18);

var_dump($codeStr);
var_dump($encodeStr);