<?
/*******************************
 *  PATTERN ABSTRACT METHOD
 *******************************/

interface Factory {
    function getUFO();
}

// abstract method getUFO()
class AlienFactory implements Factory {
    function getUFO(){
        return new Alien;
    }
}
class GhostFactory implements Factory {
    function getUFO(){
        return new Ghost;
    }
}


interface UFO {
    function getName();
}

class Alien implements UFO {
    function getName(){
        echo 'Alien';
    }
}
class Ghost implements UFO {
    function getName(){
        echo 'Ghost';
    }
}

$af = new AlienFactory();
$ufo = $af->getUFO();

$ufo->getName();



/*******************************
 *  PATTERN ABSTRACT FACTORY
 *******************************/

class Config {
    public static $ghostBusters = 1;
}

// abstract factory of abstracts methods
abstract class AbstractFactory {
    public static function getFactory() {
        switch ( Config::$ghostBusters ) {
            case 1:
                return new AlienFactory;
            case 2:
                return new GhostFactory;
        }
        throw new Exception('Doesn\'t UFO in config');
    }

    abstract public function getUFO();
}

class AlienAbstractFactory extends AbstractFactory {
    function getUFO(){
        return new Alien;
    }
}
class GhostAbstractFactory extends AbstractFactory {
    function getUFO(){
        return new Ghost;
    }
}

$a = AbstractFactory::getFactory()->getUFO();
$ufo->getName();
