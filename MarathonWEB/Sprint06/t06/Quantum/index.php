<?php

namespace Space\Quantum;
function calculate_time()
{
    return array(11, 9, 3);
}

$time = calculate_time();
echo "<!DOCTYPE html><html>
<head>
<meta charset=\"utf - 8\">
<title>Quantum space</title>
</head>
<body>
<p>" . "In quantum space you were absent for " . $time[0] . " years, " .
    $time[1] . " months, " . $time[2] . " days\n" .
"</p >
</body >
</html > ";
//$time = Space\Quantum\calculate_time();
//echo "In quantum space you were absent for " . $time[0] . " years, " .
//    $time[1] . " months, " . $time[2] . " days\n";