<h2>Инкапсуляция данных:</h2>
<p>Класс содержит одновременно переменные и функции. Переменные называются свойствами, а функции методами класса. 
Доступ к членам класса контролируется извне модификаторами в объявлении класса. Как правило при этом запрещается 
доступ к свойствам класса, но разрешается доступ к методам, которые могут хранить и извлекать данные из свойств. 
Этод метод "сокрытия данных" гарантирует, что что сохраненные данные безопасно инкапсулируются в переменные члена класса</p>
<h2> Плюсы и минусы </h2>
<p>Основным понятием объектно-ориентированного программирования является класс.
Класс это лишь описание методов и свойств. Класс не создается и не используется в программе.
Объект - это переменная, которая имеет свойства и методы, описанные в классе, от которого он создается. Вы можете создать несколько объектов от одного класса.
Свойство – это та же самая переменная, только внутри объекта.
Метод – это та же самая функция, только внутри объекта.</p>
<p>  Плюсы ООП: удобно редактировать код, т.к. в большом файле, где бы храниться много функций тяжело сориентироваться;
 удоно модифицировать, поскольку достаточно лишь изменить тот или иной метод класса, не переписывая при этом основной код программы;
 повышение безопасности, при грамотном использовании;
 увеличение времени работы скрипта, при грамотном использовании.</p>
 <p> Минусы ООП: при неправильном проектировании (описание структуры класса, его свойств и методов описываемых в нем, взаимодействие объектов) все вышеперечисленные плюсы окажутся в минусе. </p> 

<?php
// Машина
class Cars
{
    public $mark;
    public $model;
    public $color;
}
class Car extends Cars
{
    public function getCar()
    {
        $html = $this->mark . ' ' . $this->model . ' ' . $this->color;
        return $html;
    }
}
$Skoda = new Car();
$Skoda->mark = 'Skoda';
$Skoda->model = '120LS';
$Skoda->color = 'red';
$Porsche = new Car();
$Porsche->mark = 'Porsche Targa';
$Porsche->model = '911S';
$Porsche->color = 'green';
// Телевизор
class TV
{
    public $mark;
    public $resolution;
    public $diagonal;
    public function getTV()
    {
        echo $this->mark . ' ' . $this->resolution . ' ' . $this->diagonal;
    }
}
$LG = new TV();
$LG->mark = 'LG';
$LG->resolution = '1920x1080';
$LG->diagonal = '43"';
$Samsung = new TV();
$Samsung->mark = 'Samsung';
$Samsung->resolution = '1366x768';
$Samsung->diagonal = '28"';
// Шариковая ручка
class BallPen
{
    public $mark;
    public $collection;
    public $price;
    public function getPen()
    {
        echo $this->mark . ' ' . $this->collection . ' ' . $this->price;
    }
}
$Waterman = new BallPen();
$Waterman->mark = 'Waterman';
$Waterman->collection = 'WATERMAN Exception';
$Waterman->price = '22000$';
$Parker = new BallPen();
$Parker->mark = 'Parker';
$Parker->collection = ' PARKER Duofold';
$Parker->price = '700$';
// Утка
class Duck
{
    public $name;
    public $Superfamily;
	public $family;
    public function getDuck()
    {
        echo $this->name . ' '. $this->Superfamily . ' ' . $this->family;
    }
}
$Mallard = new Duck();
$Mallard->name = 'Anas platyrhynchos';
$Mallard->Superfamily = 'River ducks';
$Mallard->family = 'Mallard';
$Domestic = new Duck();
$Domestic->name = 'Anas platyrhynchos';
$Domestic->Superfamily = 'River ducks';
$Domestic->family = 'Domestic Duck';
// Товар
class Goods
{
    public $name;
    public $category;
    public $price;
    public function getGoods()
    {
        echo $this->name . ' ' . $this->category . '' . $this->price;
    }
}
$shoes = new Goods();
$shoes->name = 'shoes';
$shoes->category = 'clothes';
$shoes->price = 200;
$candy = new Goods();
$candy->name = 'candy';
$candy->category = 'food';
$candy->price = 15;
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?=$Porsche ->getCar();?>

</body>
</html>