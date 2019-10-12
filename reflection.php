
/* РЕФЛЕКСИЯ - это процес, во время которого программа способна отслеживать своё состояние. */
/* В PHP есть ряд класов и методов для реализации рефлексии. */
/* В кнце, концов - возможность делать объект класса, имя которой в переменной. */

// 
// __CLASS__
// __DIR__
// get_defined_vars();
// func_get_args();
// eval();

$obj = new $className();
$obj->methodName();

$funcReflactor = new ReflectionFunction('func_name');

$classReflector = new ReflectionClass('class_name');

