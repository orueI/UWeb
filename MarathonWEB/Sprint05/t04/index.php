<?php
function total($addCount, $addPrice, $currentTotal = 0): float
{
    return $addCount * $addPrice + $currentTotal;
}