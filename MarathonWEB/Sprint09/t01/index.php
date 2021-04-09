<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<form method="post">
    <input type="text" name="login" placeholder="login">
    <input type="password" name="password" placeholder="password">
    <input type="submit">
</form>
</body>
</html>
<?php

require_once("model/UserTable.php");
require_once("model/Model.php");
require_once("model/DatabaseConnection.php");
if ($_POST) {
    $userDb = new UserTable();
    $userDb->login = $_POST["login"];
    echo $_POST["password"];
    if (!$userDb->isEmpty()) {
        $userDb->find($userDb->login);
        echo $userDb->password;
        if (!isPasswordCorrect($userDb->password, $_POST["password"])) {
            $notification = "  
            <SCRIPT>
                alert('Incorrect password')
            </SCRIPT>";
            echo $notification;
        } else {
            if ($userDb->isAdmin) {
                header("LOCATION: ./html/adminCard.html");

            } else {
                header("LOCATION: ./html/userCard.html?_ijt=6k8aev1rb4790p62s3uj4aola2");

            }
        }
    } else {
        $notification = "  
        <SCRIPT>
            alert('Unknown user')
        </SCRIPT>";
        echo $notification;
    }
}
function isPasswordCorrect($password1, $password2)
{
    return $password1 == $password2;
}