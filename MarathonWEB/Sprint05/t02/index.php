<?php
function checkDivision($startRange = 1, $endRange = 60)
{
    for ($i = $startRange; $i <= $endRange; $i++) {
        $out = "The number {$i} ";
        if ($i % 2 == 0) $out = div2($out);
        if ($i % 3 == 0) $out = div3($out);
        if ($i % 10 == 0) $out = div10($out);
        if (substr($out, -1) == " ") $out = "{$out}-";
        echo "{$out}\n";
    }
}

function div2($s)
{
    if (substr($s, -1) != " ")
        $s = "{$s},";
    return "{$s}is divisible by 2";
}

function div3($s)
{
    if (substr($s, -1) != " ")
        $s = "$s,";
    return "{$s}is divisible by 3";

}

function div10($s)
{
    if (substr($s, -1) != " ")
        $s = "{$s},";
    return "{$s}is divisible by 10";

}