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
interface BaseInterface {}
trait myTrait {}

// анонимные классы
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

