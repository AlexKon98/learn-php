<?php

# цикл по возрастанию
$results = [10, 15, 35, 70, 71, 98, 0];
$candidatesNum = count($results);
for ( $i = 0; $i < $candidatesNum; $i++ ){
  if ( $results[$i] >= 70 ){
    # индекс начинается с 0
    $number = $i + 1;
    echo "Кандидат с номером {$number} набрал более 70 баллов \n";
  }
}

# цикл по убыванию
for ( $i = 200; $i > 0; $i-- ){
  if ( $i % 5 === 0 ) echo "Число {$i} делится на 5 \n";
}