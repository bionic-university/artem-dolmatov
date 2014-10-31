<?php
abstract class OpenClose
{
    protected $is_opened = false;

    protected function getName(){
        return get_class($this);
    }
    public function isOpened()
    {
        return $this->is_opened;
    }

    public function openClose()
    {
        $this->is_opened = !$this->is_opened;
        if ($this->is_opened) {return $this->getName()." Opened |";} else return $this->getName()." Closed |";
    }
}