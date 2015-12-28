<?
/**************************************
 * Learn DRY and Dependency Invertion
 **************************************/

interface FlyBehavior {
    function fly();
}

class FlyWithWings implements FlyBehavior {
    function fly() {
        echo __METHOD__ . "\r\n";
    }
}
class NoFly implements FlyBehavior {
    function fly() {
        echo __METHOD__ . "\r\n";
    }
}
// extends
class FlyZigzag implements FlyBehavior {
    function fly() {
        echo __METHOD__ . "\r\n";
    }
}

// --- with __construct() ------------
/*
class Duck {
    public $behaviorFly;

    function __construct(FlyBehavior $fb){
        $this->behaviorFly = new $fb;
    }
    function performFly() {
        $this->behaviorFly->fly();
    }
    function display() {
        echo __METHOD__ . ' hidden Duck';
    }
}

class MallardDuck extends Duck {
    function __construct($fb) {
        parent::__construct($fb);
    }
}
class RubberdDuck extends Duck {
    function __construct($fb) {
        parent::__construct($fb);
    }
}
// new duck
class DuckFlyZigzag extends Duck {
    function __construct($fb){
        parent::__construct($fb);
    }
}

$md = new MallardDuck( new FlyWithWings );
echo '<pre>';
print_r( $md->performFly() );
print_r( $md->display() );
echo '</pre>';

$md = new RubberdDuck( new NoFly );
echo '<pre>';
print_r( $md->performFly() );
print_r( $md->display() );
echo '</pre>';

$md = new DuckFlyZigzag( new FlyZigzag );
echo '<pre>';
print_r( $md->performFly() );
print_r( $md->display() );
echo '</pre>';
*/

// ----- with setFly() better that __construct() ------
// ----- principle DRY and Dependency Invertion -------
class Duck {
    private $behaviorFly = NULL;

    // method with dinamic behavior
    public function performFly() {
        if( !is_null($this->behaviorFly) ) {
            $this->behaviorFly->fly();
        } else {
            echo 'No choose type of fly' . "\r\n";
        }
    }
    public function setFly( FlyBehavior $fb ){
        $this->behaviorFly = $fb;
    }
    // simple method
    public function display() {
        echo __METHOD__ . ' hidden Duck' . "\r\n";
    }
}

class MallardDuck extends Duck {
    // without __construct() and without dublicating code
}

class RubberdDuck extends Duck {
    // without __construct()
}
// new duck
class DuckFlyZigzag extends Duck {
    // without __construct()
}

$md = new MallardDuck();
echo '<pre>';
$md->setFly( new FlyWithWings );
print_r( $md->performFly() );
print_r( $md->display() );
echo '</pre>';

$md = new RubberdDuck();
echo '<pre>';
$md->setFly( new NoFly );
print_r( $md->performFly() );
print_r( $md->display() );
echo '</pre>';

$md = new DuckFlyZigzag();
echo '<pre>';
$md->setFly( new FlyZigzag );
print_r( $md->performFly() );
print_r( $md->display() );
echo '</pre>';
