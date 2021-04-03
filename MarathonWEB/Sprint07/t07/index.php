<?php
require_once("ListAvengerQuotes.php");
require_once("AvengerQuote.php");
$listAvengerQuotes = new ListAvengerQuotes([
    new AvengerQuote(1, "Tony Stark", "Hello1 ", [
        "href1",
        "href2",
        "href3"
    ]),
    new AvengerQuote(2, "Tony Stark 2", "Hello 2 ", [
        "href1",
        "href2",
        "href3"
    ]),
    new AvengerQuote(3, "Tony Stark 3", "Hello 3", [
        "href1",
        "href2",
        "href3"
    ])]);
$listAvengerQuotes->toXml('test.xml');
$listAvengerQuotes1 = new ListAvengerQuotes(array());
$listAvengerQuotes1->fromXml('test.xml');
$listAvengerQuotes1->toXml('test2.xml');
