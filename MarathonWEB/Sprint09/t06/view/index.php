<?php
require_once("NavigationManager.php");
require_once("../controller/Controller.php");
require_once("../model/Model.php");
require_once("../model/User.php");
require_once("../model/UserDB.php");
require_once("../model/DatabaseConnection.php");

$register = "/Users/mburenko/IdeaProjects/Sprint09/t06/view/res/html/registration.html";
$login = "/Users/mburenko/IdeaProjects/Sprint09/t06/view/res/html/login.html";
$userCard = "/Users/mburenko/IdeaProjects/Sprint09/t06/view/res/html/user_card.html";
$adminCard = "/Users/mburenko/IdeaProjects/Sprint09/t06/view/res/html/card_admin.html";
$forget = "/Users/mburenko/IdeaProjects/Sprint09/t06/view/res/html/forget_password.html";

$manager = new NavigationManager($register);
$manager->putScreen('register', $register);
$manager->putScreen('login', $login);
$manager->putScreen('forget', $forget);
$manager->putScreen('adminCard', $adminCard);
$manager->putScreen('userCard', $userCard);

$screenController = new Controller($manager);
$manager->renderBy('register');
if (isset($_POST['registerUser'])) {
    if ($_POST['registerUser']['password'] == $_POST['registerUser']['confirmPassword']) {
        $screenController->register(arrayToUser($_POST['registerUser']));
    }else{
        notify('Incorrect confirm password');
    }
} elseif (isset($_POST['loginUser'])) {
    $screenController->login($_POST['loginUser']['login'], $_POST['loginUser']['password']);
} elseif (isset($_POST['forgetLogin'])) {
    $screenController->forget($_POST['forgetLogin']);
} elseif (isset($_POST['forger'])) {
    $manager->renderBy('forget');
} elseif (isset($_POST['register'])) {
    $manager->renderBy('register');
} elseif (isset($_POST['login'])) {
    $manager->renderBy('login');

//    $screenController->forget();
}

function arrayToUser(array $arr): User
{
    return new User($arr['login'], $arr['password'], $arr['fullName'], $arr['email'], 0);
}

function notify($massage){
    echo "  
            <SCRIPT>
                alert('$massage')
            </SCRIPT>";
}