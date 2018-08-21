<h1>Animal abuse</h1>
<?php

$continents = array("Africa" =>  array("Okapia", "Dorylus helvolus", "Ixodes dawesi"),
"Antarctica" => array("Sennertia antarctica", "Aptenodytes forsteri", "Tullbergia mediantarctica"),
"Australia" => array("Prototroctes oxyrhynchus", "Huberia", "Deinacrida"),
"South_America" =>array("Chrysophora chrysochlora", "Saguinus imperator", "Hydrochoerus"),
"North_America" => array("Pachybrachis calcaratus", "Gnypeta ashei", "Bolitogyrus buphthalmus"),
"Eurasia" => array("Saiga tatarica", "Endromidae", "Pygeretmus zhitkovi"));

$double_name = [];
$continent = [];
$first_world = [];
$second_word = [];

echo '<h1>Массив животных по континентам</h1>';
foreach ($continents as $key => $animals) {
    $continent[] = $key;
    echo ("<h2>$key</h2>".
		"<ul>");
    foreach($animals as $animal)
	{
		echo "<li>$animal</li>";
	}
	echo "</ul>";
    foreach ($animals as $two) {
        $rows_two = explode(" ", $two);
        if (count($rows_two) == 2) {
            $double_name[] = $two;
            $first_world[] = $rows_two[0];
            $second_word[] = $rows_two[1];
		}
    }
}
echo '<hr>';
echo '<h1>Массив из двух слов</h1>';
foreach ($double_name as $item) {
    echo "$item<br>";
}
echo '<hr>';
shuffle($second_word);
echo '<h1>Выдуманные животные</h1>';
foreach ($second_word as $last) {
    $title = array_shift($continent);
    $first = array_shift($first_world);
    echo "<h2>$title</h2>";
    echo $first . ' ' . $last . '<br>';
}