<?php
function firstUpper($str): string
{
    if (strlen($str) == 0 && $str == null) return "";
//    $patern = "/\w/";
    $result = preg_match('/\s*\w/', $str, $found);
    if ($result == 0 ) return "";
//    echo "found[0]";
//    echo $found[0];
    $str = strtolower($str);
    $firstChars = strtoupper($found[0]);
    $strWithoutFirstChar = substr($str, strlen($firstChars));
    return "{$firstChars}{$strWithoutFirstChar}";
}