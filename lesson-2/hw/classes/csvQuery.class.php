<?php

class csvQuery {
function __construct(){
// refactor so user can input the csv path
    $file = 'banks.csv';
    $this->validateCSV($file);
    $this->parseCSV($file);
}
function parseCSV($file){
// refactor for cli
//while not e
    echo '<meta charset="UTF-16">';
// $file =readline();
    $raw_csv = file($file);
    foreach ($raw_csv as $v){echo "| ".$v." |<hr>";}
}
function displayCSV(){
//foreach  || decide whether to separate parse from display
}
    function validateCSV($file){
    if (!file_exists($file) || !is_readable($file)){ echo "Unable to read the file"; exit();}
    elseif (empty($file)) {echo "File is empty"; exit();}
}
} 