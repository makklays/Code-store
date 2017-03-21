<?php

/**
 * Class init
 *
 * Клас init состоит из 3 методов: create, fill, get;
 * Которые, создают таблицу test в базе данных, заполняют ее случайными данными согласно полей таблицы
 * и выбирают из таблицы test, данные по критерию: result среди значений 'normal' и 'success'
 * От класа init нельзя сделать наследника
 *
 * @author Kuziv A.V. <makklays@gmail.com>
 */
final class init
{
    /**
     * Свойство класса
     *
     * @var object
     */
    protected $link;

    /**
     * Конструктор класса
     *
     * init constructor.
     */
    public function __construct()
    {
        try {
            $this->create();
            $this->fill();
        } catch (Exception $ex) {
            echo 'Поймано исключение: '. $ex->getMessage() . ' на строке: ' . $ex->getLine();
        }
    }

    /**
     * Метод класса
     *
     * create a database and table in the database
     */
    private function create()
    {
        $host = 'localhost';
        $user = 'root';
        $dbname = 'test';
        $pswd = '';

        try {
            // connection
            $this->link  = mysqli_connect($host, $user, $pswd);

            // create database
            $sql = 'IF NOT EXISTS CREATE DATABASE `test` CHARACTER SET utf8 COLLATE utf8_general_ci';
            mysqli_query($this->link, $sql, MYSQLI_STORE_RESULT);

            // select database
            mysqli_select_db($this->link, $dbname);

            // create table `test`
            $sql = "DROP TABLE `test`";
            mysqli_query($this->link, $sql, MYSQLI_STORE_RESULT);
            $sql = "CREATE TABLE `test` (
                        `id` int(11) NOT NULL auto_increment, 
                        `script_name` varchar(25),
                        `start_time` int(11) default NULL,
                        `end_time` int(11) default NULL,
                        `result` enum('normal','illegal','failed','success'),
                        PRIMARY KEY (`id`) 
                    ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; ";
            mysqli_query($this->link, $sql, MYSQLI_STORE_RESULT);

        } catch (Exception $ex) {
            echo 'Поймано исключение: '. $ex->getMessage() . ' на строке: ' . $ex->getLine();
        }
    }

    /**
     * Метод класса
     *
     * fill data in the database
     */
    private function fill()
    {
        $arr = [1 => 'normal', 2 => 'illegal', 3 => 'failed', 4 => 'success'];
        for($i=1; $i<=10; $i++) {
            $sql = 'INSERT INTO test SET script_name="'.rand(1,10).'", start_time="'.time().'", end_time="'.time().'", result="'.$arr[rand(1,4)].'" ';
            mysqli_query($this->link, $sql);
        }
    }

    /**
     * Метод класса
     *
     * @return array|null
     *
     * get data from database (table `test`)
     */
    public function get()
    {
        $sql = 'SELECT * FROM `test` WHERE result = "normal" OR result = "success"';
        try {
            $res = mysqli_query($this->link, $sql);
            $result = mysqli_fetch_all($res);
        } catch (Exception $e) {
            echo 'Поймано исключение: '. $e->getMessage() . ' на строке: ' . $e->getLine();
        }

        return $result;
    }
}

$cl = new init;

echo '<pre>';
print_r($cl->get());
echo '</pre>';

