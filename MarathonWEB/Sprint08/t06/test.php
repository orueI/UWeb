<?php

require_once("DatabaseConnection.php");
$db = new DatabaseConnection('localhost','3306','mburenko','sEcurEvsd3bd90','ucode_web');
$result = $db->connection->query("SELECT * FROM heroes;");
if(isset($result)){
while ($row = mysql_fetch_assoc($result)) {
    echo $row['firstname'];
    echo $row['lastname'];
    echo $row['address'];
    echo $row['age'];
}
}