/**
* Функция glob() ;))
* Выбрать все файлы с расширением из директории (путь и размер)
*/

$filelist = glob("datafiles/*.doc"); // путь к файлам
foreach ($filelist as $filename) {
    $arr[] .= $filename . " и его размер: " . filesize($filename) . " байт <br/>";
}

/**
Array
(
    [0] => datafiles/секснапляже:(импотент:).doc и его размер: 0 байт 
    
    [1] => datafiles/I_am_laugh_with_you!_How_translate.doc и его размер: 1 байт 
)
*/
