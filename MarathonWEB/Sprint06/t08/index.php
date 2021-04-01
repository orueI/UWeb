<?php

if ($_POST) {
    echo '<pre>';
//    echo 31;
    if ($_POST["checkbox1"]==2)
        echo "You're right";
    else
        echo "You're wrong";
    echo '</pre>';
}
?>
<form action="" method="post">
    <h1>What Thanos did the Soul Stone?</h1>
    <input type="radio" value="1" name="checkbox1">Jumped from the mountain<br/>
    <input type="radio" value="2" name="checkbox1">Made stone keeper to jump from the mountain<br/>
    <input type="radio" value="3" name="checkbox1">Pushed Gamora off the mountain<br/>
    <input type="submit" value="Отправь меня!"/>
</form>