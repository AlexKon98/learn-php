<?php

class Translator {
  private $dictionary = ['en' => [], 'de' => []];
  private $language;

  public function __construct($language)
  {
    $this->language = $language;

    $this->addWord('лес', 'forest', 'en');
    $this->addWord('работа', 'work', 'en');

    $this->addWord('лес', 'wald', 'de');
    $this->addWord('работа', 'arbeit', 'de');
  }

  public function addWord(string $russianWord, string $translation, $language)
  {
    if (array_key_exists($translation, $this->dictionary[$language])) {
      return;
    }
    $this->dictionary[$this->language][$translation] = $russianWord;
  }

  public function translate(string $foreignWord)
  {
    if(array_key_exists($foreignWord, $this->dictionary[$this->language])) {
      return $this->dictionary[$this->language][$foreignWord] . PHP_EOL;
    }
    return false;
  }
}

$translatorEn = new Translator('en');
$translatorDe = new Translator('de');

echo $translatorEn->translate('forest');
echo $$translatorDe->translate('arbeit');