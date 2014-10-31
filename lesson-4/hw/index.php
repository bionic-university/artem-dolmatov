<?php
//"Класс ""Ключник"", который умеет открывать и закрывать двери, врата, окна и сундуки.
//Некоторые из данных предметов можно закрывать на ключ, некоторые - нет.
//На вход подается строкой тип предмета, и на выходе - результат процесса (использовал ли ключник ключ для открытия)"
abstract class OpenClose
{
    protected $is_opened = false;

    public function isOpened()
    {
        return $this->is_opened;
    }

    public function openClose()
    {
        $this->is_opened = !$this->is_opened;
        if ($this->is_opened) return " Opened "; else return " Closed ";
    }
}

interface Lockable
{

    function isLocked();

    function lockUnlock();

}

class keyKeeper
{
    private $string = ' I can not open this thing  ';

    public function __construct($object = false)
    {
        if (is_object($object)) $this->action($object);
        else echo $this;
    }

    public function __toString()
    {
        return $this->string;
    }

    public function action($object)
    {
        if ($object instanceof Lockable) {
            if ($object->isLocked()) {
                $object->lockUnlock();
                $object->openClose();
            } else $object->openClose();
        }
    }


}


class door extends OpenClose implements Lockable
{
    private $is_locked = false;

    function isLocked()
    {
        return $this->is_locked;
    }

    function lockUnlock()
    {
        $this->is_locked = !$this->is_locked;
        if ($this->is_locked) return " Locked with key "; else return " Unlocked with key ";
    }

    public function __toString()
    {
        return $this->lockUnlock();
    }

}

class chest extends OpenClose implements Lockable
{
    private $is_locked = false;

    function isLocked()
    {
        return $this->is_locked;
    }

    function lockUnlock()
    {
        $this->is_locked = !$this->is_locked;
        if ($this->is_locked) return " Locked with key "; else return " Unlocked with key ";
    }
}

class gates extends OpenClose implements Lockable
{
    private $is_locked = false;

    function isLocked()
    {
        return $this->is_locked;
    }

    function lockUnlock()
    {
        $this->is_locked = !$this->is_locked;
        if ($this->is_locked) return " Locked with key "; else return " Unlocked with key ";
    }
}

class window extends OpenClose
{

}


$door = new door();
$chest = new chest();
$gates = new gates();
$window = new window();

$keeper = new keyKeeper($door);
$keeper->action($door);
