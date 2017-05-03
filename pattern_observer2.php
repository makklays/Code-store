<?php
interface Observable
{
    function attach(Observer $instance);
    function detach(Observer $instance);
    function notify();
}

interface Observer
{
    function update(Observable $instance);
}

class Subject implements Observable
{
    public $arr = array();
    function attach(Observer $obj)
    {
        $this->arr[] = $obj;
    }

    function detach(Observer $obj)
    {
        foreach($this->arr as $k => $obs)
        {
            if($obs === $obj) unset($this->arr[$k]);
        }
    }

    function getCont()
    {
        return 'Cont';
    }

    function notify(){
        foreach($this->arr as $k => $obs)
        {
            $obs->update($this);
        }
        echo '<br/>------------';
    }
}

class AA implements Observer
{
    function update(Observable $obj)
    {
        echo "<br/>".'AA update ' . $obj->getCont();
    }
}

class BB implements Observer
{
    function update(Observable $obj)
    {
        echo "<br/>".'BB update ' . $obj->getCont();
    }
}

$subject = new Subject();

$aa = new AA();
$bb = new BB();

$subject->attach($aa);
$subject->notify();

//$subject->detach($aa);
$subject->attach($bb);
$subject->notify();




