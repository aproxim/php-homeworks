
<?php
$count=0;
$file = "https://raw.githubusercontent.com/netology-code/php-2-homeworks/master/files/countries/opendata.csv";
$country = implode(" ", array_slice($argv, 1));

$fp = fopen($file, 'r');
while (($row = fgetcsv($fp, 100, ',')) !== FALSE) {
    if (count($row) <= 1) { 
		continue;
    } if ($country == $row[1]){
		$count++;
		echo $country." ".$row[4];  	
	}
} if ($count===0) {
    echo "Страна не найдена";
}
fclose($fp);

// php \xampp\htdocs\me\visa.php Абхазия
?>



