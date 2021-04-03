<?php

if ($_POST) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pre>';
}
?>
<form action="" method="post">
    Имя: <input type="text" name="personal[name]"/>
    Email: <input type="email" name="personal[email]"/>
    Age: <input type="number" name="personal[age]"/><br/>
    About: <textarea name="personal[about]" cols="84" rows="5"></textarea><br/>
    Photo: <input name="personal[photo]" type="file"><br/>

    <input type="submit" value="Отправь меня!"/>
</form>