<?php 

function solution($str, $ending) {
  $res = strpos($str, $ending, (strlen($str) - strlen($ending)));
  if (isset($res) && $res > 0) {
    return true;
  } else {
    return false;
  }
}
