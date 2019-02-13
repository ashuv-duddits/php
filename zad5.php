<?php
/*
    1. Создайте массив $bmw с ячейками:
a. model
b. speed
c. doors
d. year
    2. Заполните ячейки значениями соответсвенно: “X5”, 120, 5, “2015”
    3. Создайте массивы $toyota и $opel аналогичные массиву $bmw
(заполните данными)
    4. Объедините три массива в один многомерный массив
    5. Выведите значения всех трех массивов в виде:
CAR name
name model speed doors year
Например:
CAR bmw
X5 120 5 2015
*/
$bmw["model"] = "X5";
$bmw["speed"] = "120";
$bmw["doors"] = "5";
$bmw["year"] = "2015";
$toyota["model"] = "Land Cruiser Prado";
$toyota["speed"] = "160";
$toyota["doors"] = "5";
$toyota["year"] = "2018";
$opel["model"] = "Insignia";
$opel["speed"] = "200";
$opel["doors"] = "5";
$opel["year"] = "2019";
$cars["bmw"] = $bmw;
$cars["toyota"] = $toyota;
$cars["opel"] = $opel;
foreach ($cars as $key => $value) {
    echo "CAR $key<br/>"
        .$cars[$key]["model"]." "
        .$cars[$key]["speed"]." "
        .$cars[$key]["doors"]." "
        .$cars[$key]["year"]."<br/>";
}
