<?php
class Klas
{
    public $w;

    function __construct($w = 'click F5')
    {
        $this->w = $w;
    }
    
    public function fun_pro11() {}
    
    protected function fun_pro22() {}

    private function fun_pro33() {}
}

$cls = new Klas();

$f = get_class_methods('Klas'); // get methods of class (only public)
echo method_exists('Klas','fun_pro11'); // проверяем существует ли метод в класе

echo '<pre>';
print_r(get_class_methods('Klas')); // get_class_methods by nameclass Klas
print_r($f); // get_class_methods by object Klas
print_r($cls);

//print_r( get_declared_classes() ); // список подключенных/загруженных классов в проекте

echo '</pre>';

/**

1

Array
(
    [0] => __construct
    [1] => fun_pro11
)
Array
(
    [0] => __construct
    [1] => fun_pro11
)
Klas Object
(
    [w] => click F5
)

**/
?>
