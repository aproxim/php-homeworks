
<?php
if(!($fp = fopen("https://raw.githubusercontent.com/netology-code/php-2-homeworks/master/files/countries/opendata.csv", "r"))){
	echo "Невозможно открыть файл с данными.";
}else {	
	for ($i=0; $i=fgetcsv($fp,1000, ",");
	$i++){	
		$array =  $fp[$i];
	}
	if ($argv[1]=== $array [1]){
		$visa = $array [4];
        echo "$argv[1]: $visa[4]";
	} 
    else {
		echo "Страна не найдена";
	}
}

fclose($fp);

// php \xampp\htdocs\me\visa.php Абхазия
?>



