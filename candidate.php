<?php
/**
 * Тестовое задание для кандидатов на должность PHP-разработчика
 *
 * Файл представляет собой шаблон для выполнения тестового задания.
 * Класс должен работать без генерации предупреждений при включенном режиме error_reporting=E_ALL.
 *
 */

//header('Content-Type: text/html; charset=utf-8');
//ini_set('error_reporting', E_ALL);

class Candidate {

    /**
     * Задание 1
     *
     * На вход подается произвольный текст. Необходимо вернуть массив слов, которые встречаются в тексте более 3-х раз.
     * Массив необходимо отсортировать по убыванию, то есть слово которое встречается чаще стоит в начале массива,
     * менее - в конце массива.
     * Длина слова должна быть более 3 символов и меньше 7. Спряжение слов не учитывать.
     *
     *
     * @param  string $str Входной текст
     * @return array	   Результирующий массив
     */
	  public function task1($str) {
        
    	mb_internal_encoding('UTF-8');
        
    	if(mb_strlen($str) == 0) return array();
    	
    	$res_arr = array();
    	// удаляем лишние символы, перенос строк, перевод каретки, табуляцию и т.д.
    	// сводим до пробелов :)
    	$str = strip_tags($str);
    	$str = str_replace("\r\n", ' ', $str);
    	$str = str_replace("\n", ' ', $str);
    	$str = str_replace("\r", ' ', $str);
    	$str = str_replace("\tab", ' ', $str);
    	$str = str_replace(',', ' ', $str);
    	$str = str_replace('.', ' ', $str);
    	$str = str_replace('\\', ' ', $str);
    	$str = str_replace('"', '', $str);
    	$str = str_replace("'", '', $str);
    	$res_arr = explode(' ', trim($str));
        
        if(isset($res_arr) && !empty($res_arr)){
	    	// подсчитываем сколько раз встречается в тексте слово
    		$arr_counts = array_count_values($res_arr);
	    	
    		$res_arr = array();
    		foreach($arr_counts as $k => $v){
	    		// удаляем слова с длинной менее 3
	    		if(mb_strlen($k) <= 3) continue;
	    		// удаляем слова с длинной более 7
	    		if(mb_strlen($k) >= 7) continue; 
	    		// удаляем слова, которые встречаются менее 3 раз
	    		if($v <= 3) continue; 
	    		
	    		$res_arr[$k] = $v;
	    	}
	    	// сортируем по убыванию
	    	arsort($res_arr);
	    	reset($res_arr);
    	} 
        
        return $res_arr;
    }
    
    /**
     * Задание 2
     *
     * В неупорядоченном массиве положительных чисел необходимо определить длинну и положение наиболее длинной группы,
     * представляющей собой перестановку элементов отрезка натурального ряда чисел.
     *
     * Элементы массива:
     * 5, 7, 6, 4, 22, 19, 20, 21, 23
     *
     * В нем перестановками являются:
     * 5, 7, 6, 4 и 22, 19, 20, 21, 23
     *
     * Вторая группа является наибольшей. Индекс второй группы 4 и длинна группы 5.
     * Метод должен вернуть array(4, 5)
     *
     * @param  array $list Входной массив
     * @return array       Массив из двух элементов: первый - индекс первого элемента максимальной группы,
     * 					   второй - длина группы
     */
    public function task2(array $list) {
        $list_tmp = $list;
    	
    	// сортируем по убыванию
    	sort($list_tmp);
    	
    	// определяем группы натурального ряда чисел - $arr_group
    	$arr_group = array();
    	foreach($list_tmp as $k => $v){
    		if(isset($list_tmp[($k-1)]) && (1 + $list_tmp[($k-1)]) == $v ){
    			$arr_group[$i][$v] = $v;
    		} else {
    			$arr_group[$v][$v] = $v;
    			$i = $v;
    		}
    	}
    	
    	// определяем самую длинную группу - $arr_max_group
    	$arr_max_group = array();
    	$max_count = 0;
    	foreach($arr_group as $k => $v){
    		if($max_count < count($v)){
    			$max_count = count($v);
    			$arr_max_group = $v;
    		} else {
    			unset($arr_group[$k]);
    		}
    	}
    	
    	// индекс первого элемента максимальной группы - $max_k
    	$max_k = 0;
    	$flag = true;
        foreach($list as $k => $v){
    		if($flag && in_array($v, $arr_max_group)){
    			$max_k = $k;
    			$flag = false;
    		}
    	}
    	
    	// массив ответа
    	$res_array = array($max_k, $max_count);
    	
    	return $res_array;
  }
}
