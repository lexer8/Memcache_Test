<?php

// включаем классы
require_once(ROOT.DS.'libs'.DS.'config.class.php');
require_once(ROOT.DS.'libs'.DS.'Smarty.class.php');
require_once(ROOT.DS.'libs'.DS.'DB.class.php');
require_once(ROOT.DS.'libs'.DS.'model.class.php');

// Включаем настройки
require_once(ROOT.DS.'configs'.DS.'config.php');

// Включаем модели
require_once(ROOT.DS.'models'.DS.'book.php');


/*
function __autoload($class_name){
    $lib_path = ROOT.DS.'libs'.DS.$class_name.'.class.php';

//    echo $lib_path;

    if ( file_exists($lib_path) ){
        require_once($lib_path);
    } else {
        throw new Exception('Failed to include class: ' . $class_name);
    }

} */