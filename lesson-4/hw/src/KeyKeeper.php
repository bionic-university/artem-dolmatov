<?php

class KeyKeeper
{
    private $string = '';

    public function __construct($object = false)
    {
        if (is_object($object)) {
            $this->action($object);
        } elseif (false === $object) {
            $this->string = PHP_EOL . ' KeyKeeper is ready ' . PHP_EOL;
            echo $this;
        } else {
            $this->string = ' I can not open this thing  ' . PHP_EOL;
            echo $this;
        }
    }

    public function action($object)
    {
        if ($object instanceof LockableInterface && $object->isLocked()) {

            $this->string = $object->lockUnlock();
            echo $this;
        } elseif ($object instanceof OpenClose) {
            $this->string = $object->openClose();
            echo $this;
        } else {
            $this->string = ' KeyKeeper can not open this thing  :( ' . PHP_EOL;
            echo $this;
        }
    }

    public function __toString()
    {
        return $this->string;
    }

}