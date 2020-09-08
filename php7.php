<?php
// строгий режим типизации strict - включается в начале каждого файла
declare(strict_types=1);

// несколько класов в одной строке use
// было
// use my\namespace\class1;
// use my\namespace\class2 as bb;
// стало
use my\namespace\{class1, class2 as bb};

class Class2 {}
class Loh {}
interface BaseInterface {}
trait myTrait {}

// анонимные классы
$obj = new Loh();
$obj->logger(new class(10) extends Class2 implements BaseInterface {
    private $number;
    private $hh;

    public function __construct($number) {
        $this->number = $number;
    }

    public function ($hh = null) {
        // сокращенный вызов isset
        $this->hh = $hh ?? 'haha';
    }

    use myTrait;
});

// добавлена возможность указать тип переменной, возвращаемой функции или метода, замыкания
// поддерживаются следующие типы:
// string, int, float, bool, array, callable, self (в методах), parent (только методы), Closure,
// Имя класа, Имя интерфейса

function plus2 (int $num): int
{
    return ($num + 2);
}

function stringText (string $text = ''): bool
{
    $result = strlen($text) > 0 ? true : false;
    return $result;
}

class A {}
class B extends A {}
class C
{
    public function test() : A
    {
        return new A;
    }
}
class D extends C
{
    public function test() : B // Fatal error
    {
        return new B;
    }
}
// Объявление метода D::test() : B вызовет E_COMPILE_ERROR так как многовариантность не дозволена
// Чтобы D:test() заработал нужно указать что-то нечто A 

