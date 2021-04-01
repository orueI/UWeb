<h1>Password</h1>
<?php
function printFormForNewPassword()
{
    $formForNewPassword = '
<form method="post">
    Password for saving to session <input type="text" name="password"><br>
    Salt for saving to session <input type="text" name="salt"><br>
    <input type="submit" value="Save">
</form>';
    echo $formForNewPassword;
}

function printCheckerPassword($hash)
{
    flush();
    echo '<form method="post">
    Hash is ';
    echo $hash;
    echo
    '<br>
    Try to guess <input type="text" name="checkPassword"> <input type="submit" value="Check password"> <br>
    <input type="reset" value="Clear">
</form>';
}


function getHash($password, $salt)
{
    return crypt($password, $salt);
}

session_start();

if ($_POST) {
    if (isset($_POST['password']) && isset($_POST['salt'])) {
        $_SESSION["password"] = getHash($_POST['password'], $_POST['salt']);
        $_SESSION["salt"] = $_POST['salt'];
        printCheckerPassword(getHash($_SESSION['password'], $_SESSION['salt']));
    }
    if (isset($_POST['checkPassword'])) {
        if (getHash($_POST['checkPassword'], $_SESSION["salt"]) == $_SESSION["password"]) {
            $_SESSION["salt"] = '';
            $_SESSION["password"] = '';
            echo 'Hacked';
            printFormForNewPassword();
        } else printCheckerPassword(getHash($_SESSION['password'], $_SESSION['salt']));
    }
} elseif (!empty($_SESSION["password"]) && !empty($_SESSION["salt"])) {
    printCheckerPassword($_SESSION["password"]);
} else {
    echo 'Password is not saving to a session.<br>';
    printFormForNewPassword();
}
