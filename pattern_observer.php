<?
/**************************
 *  PATTERN OBSERVER
 **************************/

// Інтерфейс спостерігач
interface IObserver {
    function update( IObservable $observable );
}

// Інтерфейс спостережуваний
interface IObservable {
    function addObserver( IObserver $obj );
    function delObserver( IObserver $obj );
    function notify();
}

// Клас спостерігач
class CObserver implements IObserver {
    private $title = '';
    function __construct( $name ){
        $this->title = $name;
    }

    function update( IObservable $observable ){
        echo '<pre>--------';
        print_r($this->title.' '.$observable->title);
        echo '--------</pre>';
    }
}

// Клас спостережуваного об'єкта
class CObservable implements IObservable {
    public $title = '';
    private $observers = array();

    function __construct( $name ){
        $this->title = $name;
    }

    function addObserver( IObserver $observer ){
        $this->observers[] = $observer;
    }

    function delObserver( IObserver $observer ){
        foreach( $this->observers as $k => $v ){
            if( $v == $observer ){
                unset($this->observers[$k]);
            }
        }
    }

    function notify(){
        foreach( $this->observers as $observer ){
            $observer->update( $this );
        }
    }
}

$va = new CObserver('aaaaaa');
$ur = new CObserver('bbbbbb');

$obj = new CObservable('cccccc');
$obj->addObserver( $va );
$obj->addObserver( $ur );
$obj->notify();

$obj->delObserver( $ur );
$obj->notify();
