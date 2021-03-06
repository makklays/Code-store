<?php

/*
   Задача:
Создать класс, методы которого в папке /datafiles найдут все файлы,
имена которых состоят из цифр и букв латинского алфавита,
имеют расширение ixt и выведет на экран имена этих файлов, упорядоченных по имени.

Задание должно быть выполнено с использованием регулярных выражений.
Весь код должен быть прокомментирован в стиле PHPDocumentor'а.
*/

/**
 * Class FManager
 *
 * Клас для управления файлами
 *
 * @author Kuziv A.V. <makklays@gmail.com>
 */
class FManager
{
    /**
     * Метод класса
     *
     * Получить файлы с расширением ixt и упорядоченные по имени, из директории /datafiles,
     * имена которых состоят из цифр и букв латинского алфавита
     *
     * @return array
     */
    function get_files()
    {
        // название (путь) директории (от текущей директории)
        $dir = "datafiles";
        // пустой результирующий массив
        $arr = array();

        // открываем директорию - указатель на директорию
        if($handle = opendir($dir)){
            // в цикле проходим по всем файлам директории
            while(false !== ($file = readdir($handle))) {
                // отбрасываем (не рассматриваем) директории с назанием . ..
                if($file != "." && $file != ".."){
                    // применяем регулярное выражение
                    if(preg_match("/^[a-zA-Z0-9]+.php$/", $file)) {
                        // заполняем результирующий массив
                        $arr[] .= $file;
                    }
                }
            }
            // упорядочиваем) по имени
            sort($arr, SORT_STRING | SORT_NATURAL | SORT_FLAG_CASE);
        }

        // возвращаем результат выполненой функции - массив с данными
        return $arr;
    }
}

$cl = new FManager();
$arr = $cl->get_files();

echo '<pre>';
print_r($arr);
echo '</pre>';
