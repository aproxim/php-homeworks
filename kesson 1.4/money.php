<?php
//const csv_file = 'money.csv';

/*$array = [	
		"date" => date('d.m.Y'),
		"cost" => (),
		"name" => ()
		];  */

//Открываем csv для до-записи, 
$handle = fopen("money.csv", "a"); 
foreach ($array as $value) { 
    //Записываем, 3-ий параметр - разделитель поля
    fputcsv($handle, explode(";", $value), ";"); 
     }
 fclose($handle); 
 
//Возвращаем массив с данными из csv
$handle = fopen("money.csv", "r");
if ($handle !== FALSE ) { 
	$data = fgetcsv ( $handle , 1000, ";");
	while ( $data !== FALSE ) {
	$num = count ( $data );
	$row++;
	/*for ($c = 0; $c < $num; $c++ ) { 
		echo $data [$c] . "<br/>\n";
	} */
	$data = fgetcsv($handle,1000, ";");
	}
	fclose($handle); 
	return $adata; //
}
 
// Запись новой информации в CSV
 //$array = array($date; 256; "праздничный кекс");
     
//Если csv файл не существует, выводим сообщение


//Считаем потраченную сумму за день

?>





