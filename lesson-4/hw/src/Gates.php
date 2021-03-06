<?php

class Gates extends OpenClose implements LockableInterface
{
    private $is_locked = true;

    function isLocked()
    {
        return $this->is_locked;
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