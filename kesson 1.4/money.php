<?php
$date = date('Y-m-d');
if ($argc < 2) {
  echo "Ошибка! Аргументы не заданы. Укажите флаг --today или запустите скрипт с аргументами {цена} и {описание покупки}";
} elseif ($argv[1]<= 0){
		echo 'Ошибка! Введите корректную сумму';
	} else {
		
		$row= [
			"date" => date($date),
			"cost" => number_format($argv[1],2,".",""),
			"name" =>  implode(" ", array_slice($argv, 2))
		];
	$handle = fopen("money.csv", "a"); 
	fputcsv($handle, $row);
    echo "Добавлена строка: $row";
    fclose($handle );
    }	

//Возвращаем массив с данными из csv
$handle = fopen("money.csv", "r");
$sum = 0;
	if ($handle!== FALSE) {
        while (($row = fgetcsv($handle, 1000, ',')) !== FALSE) {
			if ($row[0] === date('Y-m-d')) {
				$sum += $row[1];
			}
        }
        echo "$date Потрачено: $sum";
    }
fclose($handle); 


// php \xampp\htdocs\me\money.php 1 2 3
?>





