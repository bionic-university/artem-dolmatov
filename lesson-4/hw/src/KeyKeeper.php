<?php

class keyKeeper
{
    private $string = '';

    public function __construct($object = false)
    {
        if (is_object($object)) $this->action($object);
        elseif (false === $object) {
            $this->string = " KeyKeeper ready |";
            echo $this;
        } else {
            $this->string = ' I can not open this thing  |';
            echo $this;
        }
    }

    public function __toString()
    {
        return $this->string;
    }

    public function action($object)
    {
        if ($object instanceof LockableInterface && $object->isLocked()) {

            $this->string = $object->lockUnlock();
            echo $this;
        } elseif ($object instanceof OpenClose) {
            $this->string = $object->openClose();
            echo $this;
        }
        else {
        $this->string = ' I can not open this thing  |';
        echo $this;
    }
    }

}