<?php
/*
    1. Используя цикл for, выведите таблицу умножения размером 10x10. Таблица
должна быть выведена с помощью HTML тега <table>
    2. Если значение индекса строки и столбца чётный, то результат вывести в круглых
скобках.
    3. Если значение индекса строки и столбца Нечётный, то результат вывести в
квадратных скобках.
    4. Во всех остальных случаях результат выводить просто числом.
*/
echo "<table style='border: 1px solid grey; border-collapse: collapse; text-align: center;'>";
for ($i = 1; $i<=10; $i++) {
    echo "<tr>";
    for ($j = 1; $j<=10; $j++) {
        if ($i%2==0 and $j%2==0) {
            echo "<td style='border: 1px solid grey;'>(".$i*$j.")</td>";
        } elseif ($i%2!=0 and $j%2!=0) {
            echo "<td style='border: 1px solid grey;'>[".$i*$j."]</td>";
        } else {
            echo "<td style='border: 1px solid grey;'>".$i*$j."</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
