<?php
/*
* Класс Data имеет функцию search(), которая ищет выражение, удовлетворяющие условиям $val1 + $val2 == $val3
* ВАЖНО! Метод должен запускаться при условии memory_limit = 1M
*/
class Data
{
    public function search()
    {
	if($fh = fopen(PW_INPUT_STREAM, 'r')){
	    while (!feof($fh)){
		$line = stream_get_line($fh, 1024, "\n");
	        //$line = fread($fh, 100);
	        list($val1, $val2, $val3) = explode(' ', trim($line));
		if ($val1 + $val2 == $val3){
                        $logStr = sprintf(
                        "%s %s %s",
                        $val1,
                        $val2,
                        $val3
                    );
                    echo $logStr.'<br/>';
            	}
	    }
	    fclose($fh);
	}
    }
}

define('PW_PROJECT_ROOT', dirname(__FILE__));
define('PW_INPUT_STREAM', PW_PROJECT_ROOT . '/stream');

ini_set('memory_limit', '1M');

$data = new Data();
$data->search();
