<?php
//"Класс ""Ключник"", который умеет открывать и закрывать двери, врата, окна и сундуки.
//Некоторые из данных предметов можно закрывать на ключ, некоторые - нет.
//На вход подается строкой тип предмета, и на выходе - результат процесса (использовал ли ключник ключ для открытия)"

spl_autoload_register(function ($class) {
    require_once 'src/' . $class . '.php';
});

$door = new Door();
$chest = new Chest();
$gates = new Gates();
$window = new Window();
$keeper = new KeyKeeper();
$line = '';
while ($line != 'Q') {
    echo PHP_EOL . ' Please type the object you would like KeyKeeper to open/close?' . PHP_EOL . ' |window|chest|door|gates| ' . PHP_EOL . ' Press "q" to exit ' . PHP_EOL;
    $line = ucfirst(strtolower(trim(fgets(STDIN))));
    switch ($line) {
        case 'Window' :
            $keeper->action($window);
            break;
        case 'Chest' :
            $keeper->action($chest);
            break;
        case 'Gates' :
            $keeper->action($gates);
            break;
        case 'Door' :
            $keeper->action($door);
            break;
        case 'Q' : break;
        default :
            $keeper->action('default');
            break;
    }
}

echo ' Thank you for using KeyKeeper!' . PHP_EOL ;