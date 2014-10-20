<?php

class csvQuery {
function __construct()
{
    echo "please enter the path to file you would like to open (banks.csv) \r\n";
    $line = fgets(STDIN);
    $file = (trim($line));
    $this->validateCSV($file);
    $this->parseCSV($file);
}

function parseCSV($file){

    $raw_csv = file($file,FILE_IGNORE_NEW_LINES);
    foreach ($raw_csv as $v){ print "\n"; $newv = str_replace(",", " | ", $v); for ($i=0;$i<82;$i++){echo "-";} print "\n".$newv." | ";}
    print "\r\n";
    for ($i=0;$i<82;$i++){echo "-";}
    print "\r\n";

}
function validateCSV($file)
{
   if (!file_exists($file) || !is_readable($file)){ echo "Unable to read the file\r\n"; exit();}
   elseif (empty($file)) {echo "File is empty\r\n"; exit();}
}
} 