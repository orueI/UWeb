<?php
echo "Name of file of the executed script - " . $_SERVER["SCRIPT_FILENAME"] . "<br>";
echo "Arguments passed to the script - " . $_SERVER['argv'] . "<br>";
echo "IP address of the server - " . $_SERVER["SERVER_ADDR"] . "<br>";
echo "A name of host that invoke current script - " . $_SERVER["SCRIPT_NAME"] . "<br>";
echo "a name and a version of the information protocol - " . $_SERVER["SERVER_PROTOCOL"] . "<br>";
echo "a query method - " . $_SERVER["REQUEST_METHOD"] . "<br>";
echo "User-Agent information - " . $_SERVER["HTTP_USER_AGENT"] . "<br>";
echo "IP address of the client - " . $_SERVER["REMOTE_ADDR"] . "<br>";
echo "A list of parameters passed by URL - " . $_SERVER["PATH_INFO"] . "<br>";
