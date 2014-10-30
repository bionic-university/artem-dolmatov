<?php
//"Класс ""Ключник"", который умеет открывать и закрывать двери, врата, окна и сундуки.
//Некоторые из данных предметов можно закрывать на ключ, некоторые - нет.
//На вход подается строкой тип предмета, и на выходе - результат процесса (использовал ли ключник ключ для открытия)"
abstract class Opener {
    private $is_opened = false;
    public function open(){}
    public function close(){}

}
class keyKeeper {
    public function __construct($object) {
        if ($object instanceof Lockable){  ($object->is_locked) ? $this->unlock($object) : lock($object); }
    }
    function open($object) { $object->$is_opened = true; return " was opened ";}
    function close($object) {$object->$is_opened = false; return " was closed ";}
    function lock($object) { $object->$is_locked = true; return " was locked using a key ";}
    function unlock($object) { $object->$is_locked = false; return " was unlocked using a key ";}
}


class door extends Opener implements Lockable{

      private $is_locked = false;

}
class chest extends Opener implements Lockable {

    private $is_locked = false;
}
class gates extends Opener implements Lockable{

    private $is_locked = false;
}
class window extends Opener{

}


interface Lockable {
  public function check_lock_status($is_opened){ if($is_opened){return " is unlocked and opened ";} elseif (!$is_opened) {} };
  public function lock(){}
  public function unlock(){}
}
