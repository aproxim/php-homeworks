<?
$file = "books.csv";
$json = file_get_contents("https://www.googleapis.com/books/v1/volumes?q=$file");
$array = json_decode($json);

$handle = fopen($json, "wb");
    foreach ($array as $fields) {
        fputcsv($handle, $fields);
		 
	}
fclose($handle);
   


//php \xampp\htdocs\me\books.php Гарри Поттер
?>