<?
$file = "\xampp\htdocs\me\books.csv";

$query = implode(" ", array_slice($argv, 1));
$json = file_get_contents("https://www.googleapis.com/books/v1/volumes?q=".urlencode($query);
$array = json_decode(file_get_contents($json));

if (!json_last_error_msg()) { 
	echo json_last_error_msg();
}

$handle = fopen($file "w"); 
foreach ($array as $value) { 
	fputcsv($handle, explode(";", $value), ";"); 
}
fclose($handle);
    
return array;
print_r($array);
 


//php \xampp\htdocs\me\books.php Гарри Поттер
?>