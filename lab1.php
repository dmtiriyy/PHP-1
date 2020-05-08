<?php
echo "<h3>Постфиксный инкремент</h3>";
$a = 5;
echo "Получается 5: " . $a++ . "<br />\n";
echo "Получается 6: " . $a . "<br />\n";

echo "<h3>Префиксный инкремент</h3>";
$a = 5;
echo "Получается 6: " . ++$a . "<br />\n";
echo "Получается 6: " . $a . "<br />\n";

echo "<h3>Постфиксный декремент</h3>";
$a = 5;
echo "Получается 5: " . $a-- . "<br />\n";
echo "Получается 4: " . $a . "<br />\n";

echo "<h3>Префиксный декремент</h3>";
$a = 5;
echo "Получается 4: " . --$a . "<br />\n";
echo "Получается 4: " . $a . "<br />\n";
///Операции присвоения
$a = ($b = 4) + 5; 
echo "Получается 9: " . $a . "<br />\n";
//комбинированные операторы
$a = 3;
$a += 5; // устанавливает $a значением 8
$b = "Hello ";
$b .= "There!"; // устанавливает $b строкой "Hello There!"
//Строковые операции
$a = "Hello ";
$b = $a . "World!"; // $b содержит строку "Hello World!"

$a = "Hello ";
$a .= "World!";     // $a содержит строку "Hello World!"
//Операторы эквивалентности
$a=10;
$b="10";
if($a==$b) echo "a и b равны"; // Выводит "a и b равны"
echo "<br />\n";

$a=0; // ноль
$b=""; // пустая строка
if($a==$b) echo "a и b равны"; // Выводит "a и b равны"
echo "<br />\n";

//Для этого нужен оператор эквивалентности === (тройное равенство).
$a=0; // ноль
$b=""; // пустая строка
if($a===$b) echo "a и b равны"; // Ничего не выводит
echo "<br />\n";

$i = 'W';
for($n=0; $n<6; $n++)
   echo ++$i . "\n";

/*
X
Y
Z
AA
AB
AC

*/

//Приведения к целому числу
echo (int)FALSE, "<br>";   // 0
echo (int)TRUE, "<br>";    // 1
echo (int)12.3, "<br>";    // 12
echo (int)NULL;            // 0

//Преоброзование строк:
echo (int)"12abc", "<br>";    // 12
echo (int)"a123bc", "<br>";   // 0
echo (int)"-12", "<br>";      // -12
echo (int)"12.3", "<br>";     // 12
echo (int)"";                 // 0

echo "<br />\n";


//Приведение к числу с плавающей точкой
echo (float)"12abc", "<br>";    // 12
echo (float)"a123bc", "<br>";   // 0
echo (float)"-12", "<br>";      // -12
echo (float)"12.3", "<br>";     // 12.3
echo (float)".13", "<br>";      // 0.13
echo (float)"1.2e5", "<br>";    // 120000
echo (float)"1.e5";             // 100000

//Приведение к строке
echo (string)TRUE;
echo (string)FALSE, "<br>: пустая строка";


//implode
echo "<br />\n";
$array = array('surname', 'name', 'patronymic');
echo "<br />\n";
echo "<h3>implode</h3> ";
echo "<br />\n";
$comma_separated = implode(",", $array);

echo $comma_separated; // surname,name,patronymic
echo "<br />\n";


///explode

echo "<h3>explode</h3> ";
$team  = "игрок1 игрок2 игрок3 игрок4 игрок5 игрок6";
$players = explode(" ", $team);
echo $players[0]; // игрок1
echo $players[1]; // игрок2
echo "<br />\n";
// Создаем новый класс Person:
class Person {
    // данные (свойства):
    var $name;
    
    // методы:
     function Getname() {
     echo $this->name;
     }
    
     function Setname($name) {
     $this->name = $name;
     }
    
    }
    
    // Создаем объект класса Person:
    $object = new Person;
    // Теперь для изменения имени используем метод Setname():
    $object->Setname("Dima");
    // А для доступа, как и прежде, Getname():
    $object->Getname();
    // Сценарий выводит 'Dima'
    echo "<br />\n";

    //Constructor
    class Webpage {
        var $bgcolor;
         function Webpage($color) {
         $this->bgcolor = $color;
         }
        }
        
        // Вызвать конструктор класса Webpage
        $page = new Webpage("brown");
        echo "<br />\n";
        


        //Наследования 
        class A {
            function example() {
                echo "Это первоначальная функция A::example().<br>";
            }
       }
       
       class B extends A {
            function example() {
                echo "Это переопределенная функция B::example().<br>";
                A::example();
            }
       }
       // Это первоначальная функция A::example().
       A::example();
       
       // Создаем объект класса B.
       $b = new B;
       //   Это переопределенная функция B::example().
       //   Это первоначальная функция A::example().
       $b->example();
       echo "<br />\n";



       //Деструктор
       class MyDestructableClass
{
   function __construct() {
       print "Конструктор\n";
   }

   function __destruct() {
       print "Уничтожается " . __CLASS__  . "\n";
   }
}

$obj = new MyDestructableClass();


echo "<h3>Массивы</h3>";

$notebooks[] = "Lenovo Yoga S940";
$notebooks[] = "ASUS ZenBook 3 UX390UA";
$notebooks[] = "HP ProBook 470 G3";
$notebooks[] = "Xiaomi Mi Notebook Air 13.3";
$num = count($notebooks);
for($i=0;$i<$num;$i++)
    echo "$notebooks[$i] <br />";

//Цикл foreach позволяет извлекать не только значения, но и ключи элементов:
    echo "<br />\n";
    $notebooks = array("lenovo"=>"Lenovo Yoga S940", 
    "asus"=>"ASUS ZenBook 3 UX390UA", 
    "hp" => "HP ProBook 470 G3", 
    "xiaomi" => "Xiaomi Mi Notebook Air 13.3");
foreach($notebooks as $key=>$value)
echo "$key => $value <br />";


//Многомерные массивы
echo "<br />\n";
$notebooks = array(
    "lenovo"=> array("Lenovo Yoga S940", "Lenovo ThinkBook 13s-IWL", "Lenovo Yoga C930") , 
    "asus"=>array("ASUS ZenBook 3 UX390UA", "ASUS VivoBook Flip TP501UB"),
    "hp" => array("HP ProBook 470 G3", "HP ProBook 650 G2"), 
    "xiaomi" => array("Xiaomi Mi Notebook Air 13.3", "Xiaomi Mi Notebook Air 12.5"));
foreach ($notebooks as $brand => $items)
{
echo "<h3>$brand</h3>";
echo "<ul>";
foreach ($items as $key => $value)
{
    echo "<li>$value</li>";
}
echo "</ul>";
}







echo "<h3>Одиночка на PHP</h3>";


?>