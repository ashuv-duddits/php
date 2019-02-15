<?php
/*
Задание #1
1. Функция должна принимать массив строк и выводить каждую строку в отдельном
параграфе (тег <p>)
2. Если в функцию передан второй параметр true, то возвращать (через return)
результат в виде одной объединенной строки.
*/
function task1($arrayOfStrings, $toCombineStrings)
{
    $result = "";
    foreach ($arrayOfStrings as $value) {
        if ($toCombineStrings) {
            $result .= $value;
        } else {
            echo "<p>$value</p>";
        }
    }
    return $result;
}
/*
Задание #2
1. Функция должна принимать переменное число аргументов.
2. Первым аргументом обязательно должна быть строка, обозначающая
арифметическое действие, которое необходимо выполнить со всеми
передаваемыми аргументами.
3. Остальные аргументы это целые и/или вещественные числа.
Пример вызова: calcEverything(‘+’, 1, 2, 3, 5.2);
Результат: 1 + 2 + 3 + 5.2 = 11.2
*/
function task2()
{
    $operation = func_get_arg(0);
    $arguments = [];
    $result = 0;
    foreach (func_get_args() as $key => $value) {
        if ($key > 0) {
            $arguments[] = $value;
        }
    }
    function sum($args)
    {
        $res = $args[0];
        foreach ($args as $key => $value) {
            if ($key > 0) {
                $res += $value;
            }
        }
        return $res;
    }
    function diff($args)
    {
        $res = $args[0];
        foreach ($args as $key => $value) {
            if ($key > 0) {
                $res -= $value;
            }
        }
        return $res;
    }
    function mul($args)
    {
        $res = $args[0];
        foreach ($args as $key => $value) {
            if ($key > 0) {
                $res *= $value;
            }
        }
        return $res;
    }
    function div($args)
    {
        $res = $args[0];
        foreach ($args as $key => $value) {
            if ($key > 0) {
                $res /= $value;
            }
        }
        return $res;
    }
    switch ($operation) {
        case '+':
            $result = sum($arguments);
            break;
        case '-':
            $result = diff($arguments);
            break;
        case '*':
            $result = mul($arguments);
            break;
        case '/':
            $result = div($arguments);
            break;
    }
    echo implode(" $operation ", $arguments)." = $result";
}
/*
Задание #3(Использование рекурсии не обязательно)
1. Функция должна принимать два параметра – целые числа.
2. Если в функцию передали 2 целых числа, то функция должна отобразить таблицу
умножения размером со значения параметров, переданных в функцию. (Например
если передано 8 и 8, то нарисовать от 1х1 до 8х8). Таблица должна быть
выполнена с использованием тега <table>
3. В остальных случаях выдавать корректную ошибку.
*/
function task3($cols, $rows)
{
    echo "<table style='border: 1px solid grey; border-collapse: collapse; text-align: center;'>";
    for ($i = 1; $i<=$rows; $i++) {
        echo "<tr>";
        for ($j = 1; $j<=$cols; $j++) {
            echo "<td style='border: 1px solid grey;'>".$i*$j."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
/*
Задание #4 (выполняется после вебинара “ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)
1. Выведите информацию о текущей дате в формате 31.12.2016 23:59
2. Выведите unixtime время соответствующее 24.02.2016 00:00:00.
*/
function task4($dateString)
{
    echo date("d.m.Y H:i");
    echo "<br>";
    $date = explode(" ", $dateString)[0];
    $time = explode(" ", $dateString)[1];
    $day = explode(".", $date)[0];
    $month = explode(".", $date)[1];
    $year = explode(".", $date)[2];
    $dateStringConvert = "$year-$month-$day $time";
    $timestamp = strtotime($dateStringConvert);
    echo $timestamp;
}
/*
Задание #5 выполняется после вебинара “ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)
1. Дана строка: “Карл у Клары украл Кораллы”. удалить из этой строки все заглавные
буквы “К”.
2. Дана строка “Две бутылки лимонада”. Заменить “Две”, на “Три”. По желанию
дополнить задание.
*/
function task5($string, $del, $add)
{
    $array = explode($del, $string);
    return implode($add, $array);
}
/*
Задание #6 (выполняется после вебинара “ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)
1. Создайте файл test.txt средствами PHP. Поместите в него текст - “Hello again!”
2. Напишите функцию, которая будет принимать имя файла, открывать файл и
выводить содержимое на экран.
*/
function task6($fName, $text)
{
    $file = fopen($fName, 'w+');
    $test = fwrite($file, $text);
    if ($test) {
        echo 'Данные в файл успешно занесены.';
    } else {
        echo 'Ошибка при записи в файл.';
    }
    fclose($file);
    $file = fopen($fName, "r");
    $myText = fgets($file, 999);
    echo "<br>Содержимое файла: $myText";
    fclose($file);
}
