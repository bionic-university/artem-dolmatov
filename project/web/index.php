<?php
require_once '../vendor/twig/twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../template');
$twig = new Twig_Environment($loader, array(
    'cache' => '../vendor/twig/twig/cachess'
));

echo'
<script>
        function showText() {
alert("111");
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                    document.getElementById("output").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("POST","t.php",true);
            xmlhttp.send();
        }
    </script>';


echo $twig->render('index.html', array('the' => 'variables', 'go' => 'here'));

