<?php
spl_autoload_register(function ($class) {
    include '../src/BionicUniversity/Everynote/' . $class . '.php';
});

require_once '../vendor/twig/twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../template');
$twig = new Twig_Environment($loader, array(
    'cache' => '../vendor/twig/twig/cachess'
));

//echo'
//<script>
//        function showText() {
//alert("111");
//            var xmlhttp=new XMLHttpRequest();
//            xmlhttp.onreadystatechange=function() {
//                if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                    document.getElementById("output").innerHTML=xmlhttp.responseText;
//                }
//            }
//            xmlhttp.open("POST","t.php",true);
//            xmlhttp.send();
//        }
//    </script>';
//

//$twig->render('index.html', array('the' => 'variables', 'go' => 'here'));
$dbname = 'dbname=notes';
$dbhost = 'mysql:host=localhost;';
$dbuser = 'root';
$dbpwd = '1';


$dba = new DB($dbhost.$dbname, $dbuser, $dbpwd);

$res = $dba->getData('SELECT * FROM user');

//var_dump($dba);
//var_dump($res);
if ($res) {
    foreach ($res as $k => $v) {
        echo ' '.$v['name'].' <br>';

    };
}
else
    echo "no records";

//echo $dbhost;
//$a = new DB($dbhost,);
//var_dump($a);
//, $dbname, $dbuser, $dbpwd;


