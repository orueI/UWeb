<?php
$time = date_diff(new DateTime(), new DateTime("1939-01-01"));
echo "<!DOCTYPE html><html>
<head>
<meta charset=\"utf - 8\">
<title>Quantum space</title>
</head>
<body>
<p>"."In real life you were absent for " . $time->format("%Y") . " years, " .
    $time->format("%m") . " months, " . $time->format("%d") . " days\n
</p>
</body>
</html>";
