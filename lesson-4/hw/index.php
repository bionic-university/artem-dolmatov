<?php
//"Класс ""Ключник"", который умеет открывать и закрывать двери, врата, окна и сундуки.
//Некоторые из данных предметов можно закрывать на ключ, некоторые - нет.
//На вход подается строкой тип предмета, и на выходе - результат процесса (использовал ли ключник ключ для открытия)"
abstract class Doorman {

}
class keyKeeper extends Doorman {
    public function __construct(string $object_type) {


    }
    function open() { return " was opened ";}
    function close() { return " was closed ";}
    function lock() { return " was locked using a key ";}
    function unlock() { return " was unlocked using a key ";}
}


class door implements Lockable{
    private $is_opened = false;
    private $is_locked = false;
}
class chest implements Lockable {
    private $is_opened = false;
    private $is_locked = false;
}
class gates implements Lockable{
    private $is_opened = false;
    private $is_locked = false;
}
class window {
    private $is_opened = false;
}




interface Lockable {
  public function check_lock_state($is_opened){ if($is_opened){return " is unlocked and opened ";} elseif (!$is_opened) {} };
}
