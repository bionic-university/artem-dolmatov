<?php

class Door extends OpenClose implements LockableInterface
{
    private $is_locked = true;

    function isLocked()
    {
        return $this->is_locked;
    }

    public function __toString()
    {
        return $this->lockUnlock();
    }

    function lockUnlock()
    {
        $this->is_locked = !$this->is_locked;
        if ($this->is_locked) {
            return __CLASS__ . ' Locked with key |' . PHP_EOL;
        } else {
            return __CLASS__ . ' Unlocked with key |' . PHP_EOL;
        }
    }

}