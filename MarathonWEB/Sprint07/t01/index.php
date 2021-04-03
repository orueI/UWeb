<h1>Session for new</h1>
<?php
session_start();
$forma = '
<form method="post">
    <fieldset>
        <form>
            <fieldset>
                <legend>About HERO</legend>
                Real Name: <input type="text" name="personal[name]"/>
                Current Alias: <input type="text" name="personal[currentAlias]"/>
                Age: <input type="number" name="personal[age]"/><br/>
                About: <textarea name="personal[about]" cols="84" rows="5"></textarea><br/>
                Photo: <input name="personal[photo]" type="file"><br/>
            </fieldset>
        </form>
        <form>
            <fieldset>
                <legend>Powers</legend>
                <table>
                    <tr>
                        <th><input name="personal[powers]" type="checkbox"> Strength</th>
                        <th><input name="personal[powers]" type="checkbox"> Speed</th>
                        <th><input name="personal[powers]" type="checkbox"> Intelligence</th>
                        <th><input name="personal[powers]" type="checkbox"> Intelligence</th>
                        <th><input name="personal[powers]" type="checkbox"> Intelligence</th>
                        <th><input name="personal[powers]" type="checkbox"> Intelligence</th>
                    </tr>
                </table>
                Level of control <input name="personal[control]" type="range" min="1" , max="100" step="1">
            </fieldset>
        </form>
        <form>
            <fieldset>
                <legend>Publicity</legend>

                <table>
                    <tr>
                        <th><input name="personal[publicity]" type="radio"> UNKNOWN</th>
                        <th><input name="personal[publicity]" type="radio"> LIKE A GHOST</th>
                        <th><input name="personal[publicity]" type="radio"> I AM IN COMICS</th>
                        <th><input name="personal[publicity]" type="radio"> I HAVE FUN CLUB</th>
                        <th><input name="personal[publicity]" type="radio"> SUPERSTAR</th>
                    </tr>
                </table>
            </fieldset>
        </form>
        <input type="submit" value="Send"/>
        <input type="reset" value="Clear"/>
    </fieldset>
</form>
          ';
if (empty($_SESSION["personal"])) {
    flush();
    echo $forma;
} else printSavingData();
if ($_POST) {
    $newDate = $_POST;
//    echo htmlspecialchars(print_r($newDate, true));
    saveDate($newDate);
    printSavingData();
}


function printSavingData()
{
    flush();
    $personal = $_SESSION["personal"];
    echo print_r($personal);
    echo $personal['name'];//TODO Go to learn, how to work with array
    if (isset($personal['name'])) {
        echo 'Name = ' . $personal["name"] . "\n";
    }
    if (isset($personal['currentAlias'])) {
        echo 'Current Alias = ' . $personal["currentAlias"] . "\n";
    }
    if (isset($personal['age'])) {
        echo 'Age = ' . $personal["age"] . "\n";
    }
    if (isset($personal['about'])) {
        echo 'About = ' . $personal["about"] . "\n";
    }
    if (isset($personal['photo'])) {
        echo 'Photo = ' . $personal["photo"] . "\n";
    }
    if (isset($personal['powers'])) {
        echo 'Powers = ' . $personal["powers"] . "\n";
    }
    if (isset($personal['control'])) {
        echo 'Control = ' . $personal["control"] . "\n";
    }
    if (isset($personal['publicity'])) {
        echo 'Publicity = ' . $personal['publicity'] . "\n";
    }
}

function saveDate($newPersonal)
{
    $_SESSION["personal"] = $newPersonal;
//    $_SESSION["personal"] = $newPersonal["currentAlias"];
//    $_SESSION["personal"] = $newPersonal["age"];
//    $_SESSION["personal"] = $newPersonal["about"];
//    $_SESSION["personal"] = $newPersonal["photo"];
//    $_SESSION["personal"] = $newPersonal["powers"];
//    $_SESSION["personal"] = $newPersonal["control"];
//    $_SESSION["personal"] = $newPersonal["publicity"];
}