<?php
$oldlog = $_GET['oldlog'];
$fh = fopen("http://www.avetian.se/skola/chatlog.txt?x=".generateString(3), 'r');
$returnString = fread($fh, 102400);
fclose($fh);
str_replace($oldlog, "", $returnString);
echo $returnString;

function generateString($max = 15) {
    $characterList = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%*?";
    $i = 0;
    $s = "";
    while ($i < $max) {
        $s .= $characterList{mt_rand(0, (strlen($characterList) - 1))};
        $i++;
    }
    return $s;
}