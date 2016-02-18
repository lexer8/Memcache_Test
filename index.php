<?php

// Определяем константы для будущего задания дирректорий
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

// Включаем файл с подключениями классов, настроек и моделей
require_once(ROOT.DS.'libs'.DS.'init.php');


// ------------- ПОЛУЧЕНИЕ ДАННЫХ -------------
// Создаем новый объект класса Book
$book = new Book();

/*
$result = $book->counter();
echo "<pre>";
echo "Количество книг: ";
print_r($result);
*/

// Вызываем метод получения всех книг из базы данных
$result = $book->getAll();


// --------------- ВЫВОД ДАННЫХ ---------------
// Создаем новый объект класса Smarty
$smarty = new Smarty;

// Указать переменные
$site_name = Config::get('site_name');  // Название веб-странички
$title = $result[0];                    // Откуда получена информация: из базы данных или Memcache
$text  = $result[1];                    // Результат запроса к базе данных


// Ассоциирование переменных smarty с их значениями
$smarty->assign('site_name', $site_name);
$smarty->assign('title', $title);
$smarty->assign('text', $text);

// Результат компиляции шаблона smarty
$smarty->display('template-1.tpl');