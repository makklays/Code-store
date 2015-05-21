<?php
/*
 * Тестовое задание: реализовать 2 класса "Квадрат" и "Прямоугольник", есть переменная сторона.
 * Нужно указать длины их сторон и получить площадь.
 * 
 * Интерфейс "Площадь" (квадрат или прямоугольник)
 */
interface Square
{
	public function getSquare();
}

/*
 * Абстрактный класс "Сторона" (квадрата или прямоугольника)
 */
abstract class Side
{
	public $side;
	function __construct(){
		$this->side = $side;
	}
	function __destruct(){
		unset($this->side);
	}
	abstract function zzzz();
}

/*
 * Класс "Квадрат"
 */
class Quadrate extends Side implements Square
{
	function __construct($x){
		parent::__construct($x);
		$this->side = $x;
	}
	function __destruct(){
		unset($this->side);
	}
	function zzzz(){
  		// чего-нибудь
	}
	public function getSquare(){
		return $this->side * $this->side;
	}
}

/*
 * Класс "Прямоугольник"
 */
class Rectangle extends Side implements Square
{
	public $side2;
 	function __construct($x, $y){
		parent::__construct($x);
		$this->side = $x;
		$this->side2 = $y;
	}
	function __destruct(){
		unset($this->side);
		unset($this->side2);
	}
	function zzzz(){
  		// чего-нибудь
	}
	public function getSquare(){
		return $this->side * $this->side2;
	}
}

// запускаем
$quadrate = new Quadrate(4);
echo 'Area quadrate = '.$quadrate->getSquare().'<br/>'; // 16
$rectangle = new Rectangle(4, 5);
echo 'Area rectangle = '.$rectangle->getSquare().'<br/>'; // 20

