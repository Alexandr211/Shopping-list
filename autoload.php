<?php

//PSR-0
function autoload($className)
{
   //echo $className;
//ltrim - Удаляет пробелы (или другие символы) из начала строки
    $className = ltrim($className, '\\');
    $filename = '';
    $namespace = '';
// strrpos - возврат позиции последнего вхождения подстроки в строке
    if($lastNsPos = strrpos($className, '\\'))
    {
// substr - Возвращает подстроку
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        //echo $className;
        $filename = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
        //echo $filename;
    }
    //Итоговый путь к файлу с классом для подключения
    $filename .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    //echo $filename;

    if(file_exists($filename)){
        require_once $filename;
        return true;
    }
    return false;
}

spl_autoload_register('autoload');