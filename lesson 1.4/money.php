<?php
$sum=0;

if ($argc < 2) {
  echo "Ошибка! Аргументы не заданы. Укажите флаг --today или запустите скрипт с аргументами {цена} и {описание покупки}";
} else {
	$date = date('Y-m-d');
	$cost = $argv[1];
	$name = implode(" ", array_slice($argv, 2));
	
	$row= [
		"date" => date($date),
		"cost" => $cost,
		"name" =>  $name
	];

$handle = fopen("money.csv", "a"); 
fputcsv($handle, $row);
echo "Добавлена строка: $date, $cost, $name";
fclose($handle);

$handle = fopen("money.csv", "r");
while (($row= fgetcsv($handle, 1000, ',')) !== FALSE) {
	$sum=0;
	if ($row[0] === date('Y-m-d')) {
		$sum +=$row[1];
	}
}
echo "Расход за $date составил: $sum";

fclose($handle);
}

// php \xampp\htdocs\me\money.php 1 2 3
?>