<form method="post">
    <input type="text" name="login" placeholder="Login">
    <input type="submit" value="Forger password">
</form>

<?php
require_once("./model/UserTable.php");
require_once("./model/Model.php");
require_once("./model/DatabaseConnection.php");

if ($_POST) {
    $userDb = new UserTable();
    $login = $_POST['login'];
    $userDb->login = $login;
    $userDb->find($login);
    sendMessage($userDb->email_address, 'Remind password', "Your password: '$userDb->password'", '');

    echo 'Message sending';
}

function sendMessage($email, $subject, $message, $headers)
{
    mail($email, $subject, $message, $headers);
}