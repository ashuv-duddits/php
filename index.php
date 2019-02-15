<?php
require "./src/functions.php";
echo "<p style='font-size: 20px; font-weight: 700;'>Задание 1:</p>";
$myStrings = ['Я', ' написал', ' первую', ' функцию'];
echo task1($myStrings, false);
echo "<p style='font-size: 20px; font-weight: 700;'>Задание 2:</p>";
task2('+', 5, 5, 8);
echo "<p style='font-size: 20px; font-weight: 700;'>Задание 3:</p>";
task3(10, 10);
echo "<p style='font-size: 20px; font-weight: 700;'>Задание 4:</p>";
task4("24.02.2016 00:00:00");
echo "<p style='font-size: 20px; font-weight: 700;'>Задание 5:</p>";
echo task5("Карл у Клары украл Кораллы", "К", "");
echo "<p style='font-size: 20px; font-weight: 700;'>Задание 5+:</p>";
echo task5("Две бутылки лимонада", "Две", "Три");
echo "<p style='font-size: 20px; font-weight: 700;'>Задание 6:</p>";
echo task6("test.txt", "Hello again!");
