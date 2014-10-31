<?php
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
        if ($this->is_opened) return " Opened |"; else return " Closed |";
    }
}