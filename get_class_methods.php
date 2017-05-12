<?php
class Klas
{
    public $w;

    function __construct($w = 'click F5')
    {
        $this->w = $w;
    }
}

$cls = new Klas();

$f = get_class_methods('Klas');
method_exists('Klas','w');

echo '<pre>';
//print_r(get_declared_classes()); // список подключенных классов
print_r(get_class_methods('Klas'));
print_r($f);
print_r($cls);
echo '</pre>';

?>
