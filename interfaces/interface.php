<?php

interface Ab {
  public function doAction();
}

class Ba implements Ab {
  public function doAction() {
    echo 'Test' . PHP_EOL;
  }
}
