<h1>Cookie counter</h1>
<?php
$load = 0;
//error_reporting(0);
if (isset($_COOKIE["counter"])) {
    $load = $_COOKIE["counter"];
}
echo "This page was loaded $load time(s) in last minute";
$load++;
setcookie("counter", $load, time() + 60);
?>
