<?php
require "./src/functions.php";
echo "<p style='font-size: 20px; font-weight: 700;'>Задание 1:</p>";
$myStrings = ['Я', ' написал', ' первую', ' функцию'];
echo task1($myStrings, false);
echo "<p style='font-size: 20px; font-weight: 700;'>Задание 2:</p>";
task2('+', 5, 5, 8);
echo "<p style='font-size: 20px; font-weight: 700;'>Задание 3:</p>";
task3(10, 10);
