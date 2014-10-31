<?php
//"Класс ""Ключник"", который умеет открывать и закрывать двери, врата, окна и сундуки.
//Некоторые из данных предметов можно закрывать на ключ, некоторые - нет.
//На вход подается строкой тип предмета, и на выходе - результат процесса (использовал ли ключник ключ для открытия)"

spl_autoload_register(function ($class) {
    include 'src/' . $class . '.php';
});

$door = new door();
$chest = new chest();
$gates = new gates();
$window = new window();

$keeper = new keyKeeper();

$keeper->action($window);
$keeper->action($window);
$keeper->action($chest);
$keeper->action($chest);
$keeper->action($chest);
$keeper->action($chests);

