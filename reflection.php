
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

// reflection function
$funcReflactor = new ReflectionFunction('func_name');

echo $funcReflactor->getFileName();
echo $funcReflactor->getStartLine();
echo $funcReflactor->getEndLine();
echo $funcReflactor->getDocComment();

// reflection class
$classReflector = new ReflectionClass('class_name');

// reflection object
$blogs = Blog::getById($id);

$objectReflector = new ReflectionObject($blogs);

$properties = $objectReflector->getProperties();
var_dump($properties);

foreach($properties as $prop){
    echo $prop->getName();
    echo $prop->getMethods();
    echo $prop->getConstants();
    echo $prop->newInstance();
    echo $prop->newInstanceWithoutConstructor();
}
